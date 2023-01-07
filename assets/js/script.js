(function (i, s, o, g, r, a, m) {
  i['GoogleAnalyticsObject'] = r;
  i[r] = i[r] || function () {
    (i[r].q = i[r].q || []).push(arguments)
  }, i[r].l = 1 * new Date();
  a = s.createElement(o),
    m = s.getElementsByTagName(o)[0];
  a.async = 1;
  a.src = g;
  m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-83325913-1', 'auto');
ga('send', 'pageview');


$(document).ready(function () {
  // get tab from url
  var url = document.location.toString();
  if (url.match('#')) {
    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
  }
  // change url when clicked a link with data-toggle="tab"
  $('a[data-toggle="tab"]').on('click', function (e) {
    if (history.pushState) {
      history.pushState(null, null, e.target.hash);
    } else {
      window.location.hash = e.target.hash;
    }
  });
});