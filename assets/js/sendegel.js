$(document).ready(function () {

	// get full URL from address bar
	var pageURL = window.location.href;
	if (location.hash) {
		const hash = pageURL.split("#");
		pageURL = hash[0];
	}		
	
	/* set up XMLHttpRequest */
	var xlsURL = "taha.xlsx";
	var oReq = new XMLHttpRequest();
	oReq.open("GET", xlsURL, true);
	oReq.responseType = "arraybuffer";

	oReq.onload = function(e) {
		var arraybuffer = oReq.response;

		/* convert data to binary string */
		var data = new Uint8Array(arraybuffer);
		var arr = new Array();
		for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
		var bstr = arr.join("");

		/* call xlsx */
		var workbook = XLSX.read(bstr, { type: "binary" });

		/* done sth with workbook here */
		var new_sheet = workbook.SheetNames[0];
		var erp_sheet = workbook.SheetNames[1];
		/* get worksheet */
		var newsheet = workbook.Sheets[new_sheet];
		var erpsheet = workbook.Sheets[erp_sheet];

		var s2jn = XLSX.utils.sheet_to_json(newsheet, {header: 2});
		var s2je = XLSX.utils.sheet_to_json(erpsheet, {header: 2});

		var newSheetJSON = JSON.stringify(s2jn);
		var erpSheetJSON = JSON.stringify(s2je);

		newJSON = JSON.parse(newSheetJSON);
		erpJSON = JSON.parse(erpSheetJSON);		

		// index page
		var tahaNewsList = '';
		for (var i = 0; i < newJSON.length; i++) {

			// top-taha --- check date and inform about
			var nowDate = new Date();
			var agoDate = new Date(nowDate - (1000 * 60 * 60 * 24 * 3));
			var newDate = newJSON[i].date;
			var upDate = new Date(newDate.toString().replace( /(\d{2}).(\d{2}).(\d{4})/, "$2/$1/$3"));

			if (upDate > agoDate && upDate < nowDate ){
				var tahaNewsBadge = '<span class="taha-new-badge btn btn-danger btn-sm">Yeni</span>';
			} else {
				var tahaNewsBadge = '';
			}
			// end-taha --- check date and inform about

			if ( newJSON[i].link != null ) {
				tahaNewsLink = '<a class="card-link" target="_blank" href="'+newJSON[i].link+'">İlgili Bağlantı <img src="web/img/link.png" alt="İlgili Bağlantı"></a>';
			} else { tahaNewsLink = '' }		

			tahaNewsList += '<div class="card"><div class="card-body"><p class="card-text">' + newJSON[i].news + '</p><div class="taha-subinfo"><span class="mr-2">' + newJSON[i].date + '</span>'+ tahaNewsLink+'</div>'+ tahaNewsBadge +'</div></div>';
		}
		$(tahaNewsList).appendTo('.taha-news');

		// erp page
		var tahaTabMenu	= '', tahaTabPane = '', tahaUpdate = '';		
		for (var i=0; i<erpJSON.length; i++) {

			if (i==0) {
				classShow = ' show',	classActive = ' active',	ariaSelected = 'true';
			} else {
				classShow = '',				classActive = '',					ariaSelected = 'false';
			}

			// check date and inform about
			var nowDate = new Date();
			var agoDate = new Date(nowDate - (1000 * 60 * 60 * 24 * 3));
			var newDate = erpJSON[i].date;
			var upDate = new Date(newDate.toString().replace( /(\d{2}).(\d{2}).(\d{4})/, "$2/$1/$3"));

			if (upDate > agoDate && upDate < nowDate ){
				tahaUpdate = '<span class="taha-new-badge btn btn-danger btn-sm">Yeni</span>';
				tahaUpdateHome = '<span class="taha-new-badge btn btn-danger btn-sm">Yeni</span>';
			} else {
				tahaUpdate = '';
			}


			var permaLink = 'taha-'+ newDate.toString().replace(/(\d{2}).(\d{2}).(\d{4})/, "$1$2$3");
			if ( erpJSON[i].suffix != null ) {
				permaLink += erpJSON[i].suffix;
			}

			tahaTitle		= erpJSON[i].title;

			if ( erpJSON[i].content != null ) {
				// check content type and form the content body
				if ( erpJSON[i].contentType === 'html' ) {
					tahaContent = '<iframe src="'+ erpJSON[i].content +'" style=\"width: 100%; border: 0; min-height: 800px\"></iframe>';
				} else if ( erpJSON[i].contentType === 'embed' ) {
					tahaContent = erpJSON[i].content;
				} else {
					tahaContent = '<img src="'+ erpJSON[i].content +'" class="img-fluid"/>';
				}
			} else { tahaContent = '' }

			if ( erpJSON[i].description != null ) {
				tahaDesc		= erpJSON[i].description;
			} else { tahaDesc = '' }

			if ( erpJSON[i].team != null ) {
				tahaTeam		= erpJSON[i].team;
			} else { tahaTeam = 'ERP' }

			tahaTabMenu	+= '<a class="nav-link'+ classActive +'" role="tab" data-toggle="pill" id="'+ permaLink +'-tab" href="#'+ permaLink +'" aria-controls="'+ permaLink +'" aria-selected="'+ ariaSelected +'"><p class="small mb-0">'+ tahaTeam +'</p>'+ tahaTitle +'<div>'+ tahaUpdate +'</div></a>';

			tahaTabPane += '<div class="tab-pane fade'+ classShow + classActive +'" role="tabpanel" id="'+ permaLink +'" aria-labelledby="'+ permaLink +'-tab"><h2>'+ tahaTeam +' - '+ tahaTitle +'</h2>'+'<p class="lead">'+ tahaDesc +'</p>'+ tahaContent +'</div>';

		}
		$(tahaTabMenu).appendTo('.taha-erpmenu');
		$(tahaTabPane).appendTo('.taha-erppane');
		$(tahaUpdateHome).appendTo('.taha-update');

		/* top // taha-tablink */
		let theURL = location.href.replace(/\/$/, "");
		if (location.hash) {
			const hash = theURL.split("#");
			$('#tahaTab a[href="#'+hash[1]+'"]').tab("show");
			theURL = location.href.replace(/\/#/, "#");
			history.replaceState(null, null, theURL);

		} 

		$('a[data-toggle="pill"]').on("click", function() {
			let newURL;
			const hash = $(this).attr("href");
			if(hash == "#home") {
				newURL = theURL.split("#")[0];
			} else {
				newURL = theURL.split("#")[0] + hash;
			}
			history.replaceState(null, null, newURL);
		});
		/* end // taha-tablink */

	}

	oReq.send();

  $.getJSON('taha-dashlink.json', function (data) {

		let tahaDashLink = '';
		for (var i = 0; i < data.length; i++) {
			/* console.log(data[i].url); */
			tahaDashLink += '<div class="col-6 col-md-3 p-2 mb-2"><a target="_blank" href="' + data[i].url + '" class="card btn btn-light border-light text-center shadow-sm mx-1" title="' + data[i].title + '"><img src="' + data[i].icon + '" class="icon-taha img-thumbnail mx-auto" /><p>' + data[i].title + '</p></a></div>' ;
		}
		$(tahaDashLink).appendTo('.taha-dashlink');

		/*
		console.log(data[0].url);
    console.log(data[0].title);
    console.log(data[0].icon);
		*/

  });

  $.getJSON('taha-requestlink.json', function (data) {

		let tahaRequestLink = '';
		for (var i = 0; i < data.length; i++) {
			/* console.log(data[i].url); */
			tahaRequestLink += '<div class="col-6 col-md-3 p-2 mb-2"><a target="_blank" href="' + data[i].url + '" class="card btn btn-light border-light text-center shadow-sm mx-1" title="' + data[i].title + '" style="min-height: 160px"><img src="' + data[i].icon + '" class="icon-taha img-thumbnail mx-auto" /><p>' + data[i].title + '</p></a></div>' ;
		}
		$(tahaRequestLink).appendTo('.taha-requestlink');

  });

	/* top --- taha-countdown */
	function getTimeRemaining(endtime) {
		var t = Date.parse(endtime) - Date.parse(new Date());
		var s = Math.floor((t/(1000)) 			% 60);
		var m = Math.floor((t/(1000*60)) 		% 60);
		var h = Math.floor((t/(1000*60*60))	% 24);

		var dt = Math.round( t/(1000*60*60*24) + 1 );
		var ldt = ((dt % 365));
	
		var d = (ldt % 31);
		var n = ((ldt - (ldt % 31)) / 31);
		var y = Math.round (dt/365);
		
		return {
			't': t, 'y': y, 'n': n, 'd': d, 'h': h, 'm': m, 's': s
		};
	}

	function initializeClock(id, endtime) {
		var clock = document.getElementById(id);
		var ySpan = clock.querySelector('.y');
		var nSpan = clock.querySelector('.n');
		var dSpan = clock.querySelector('.d');
		var hSpan = clock.querySelector('.h');
		var mSpan = clock.querySelector('.m');
		var sSpan = clock.querySelector('.s');

		function updateClock() {
			var t = getTimeRemaining(endtime);

			ySpan.innerHTML = t.y;
			nSpan.innerHTML = t.n;
			dSpan.innerHTML = t.d;
			hSpan.innerHTML = t.h;
			mSpan.innerHTML = t.m;
			sSpan.innerHTML = t.s;

			if (t.t <= 0) {
				clearInterval(timeinterval);
			}
		}

		updateClock();

		var timeinterval = setInterval(updateClock, 1000);
	}

	var hedef2023 = 'October 29 2023 00:00:00 GMT+0300';

	initializeClock('taha-countdown', hedef2023);
	/* end --- taha-countdown */	

});