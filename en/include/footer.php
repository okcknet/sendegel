<footer class="footer">
    <div class="container-fluid module card card4">
        <div class="row no-gutters">
            <div class="col-md-6 col-sm-12">
                <div class="card4-item card4-item1 align-center">
                    <div class="card4-wrapper">
                        <i class="icon icon-donate"></i>
                        <div class="card4-title">Donate</div>
                        <div class="card4-description">Donations of any amount you make are vital for the sustainability of our projects.</div>
                        <a class="btn btn-ghost-inverse btn-secondary" href="/en/make-a-donation.php" title="Donate">DONATE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card4-item card4-item2 align-center">
                    <div class="card4-wrapper">
                        <i class="icon icon-people"></i>
                        <div class="card4-title">Join Us</div>
                        <div class="card4-description">Our association is open to membership and participation of everyone who thinks they can make change in this world.</div>
                        <a class="btn btn-ghost-inverse btn-tertiary" href="/en/become-a-member.php" title="Join Us">JOIN US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="module social1">
                        <div class="module-title">Follow Us</div>
                        <ul>
                        	<li><a href="https://www.facebook.com/SenDeGelDernek" target="_blank">
                        			<img src="/assets/images/icon/icon-facebook.png" alt="Facebook" />
                        		</a></li>
                        	<li><a href="https://www.instagram.com/sen_de_gel" target="_blank">
                        			<img src="/assets/images/icon/icon-instagram.png" alt="Instagram" />
                        		</a></li>
                        	<li><a href="https://twitter.com/sen_de_gel" target="_blank">
                        			<img src="/assets/images/icon/icon-twitter.png" alt="Twitter" />
                        		</a></li>
                        	<li><a href="https://www.youtube.com/c/Sen-de-gelOrg" target="_blank">
                        			<img src="/assets/images/icon/icon-youtube.png" alt="Youtube" />
                        		</a></li>
														<li><a href="https://www.linkedin.com/company/sendegel-dernegi/" target="_blank">
                        			<img src="/assets/images/icon/icon-linkedin.png" alt="LinkedIn" />
                        		</a></li>														
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row footer-seperator">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="menu1 v2">
                        <ul>
                            <li><a href="/en/who-we-are.php">WHO WE ARE</a></li>
                            <li><a href="/en/who-we-are.php">Our Story</a></li>
                            <li><a href="/en/reports.php">Association Reports</a></li>
                            <li><a href="/en/our-team.php">Our Team</a></li>
                            <li><a href="/en/faq.php">Frequently Asked Questions</a></li>
                            <li><a href="/en/our-supporters.php">Our Supporters</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="menu1 v2">
                        <ul>
                            <li><a href="/en/projects.php">OUR PROJECTS</a></li>
                            <li><a href="/en/projects--water-well-project.php">Water Well Projects</a></li>
                            <li><a href="/en/projects--livestock-project.php">Livestock Projects</a></li>
                            <li><a href="/en/projects--solar-panel-project.php">Solar Panel Projects</a></li>
                            <li><a href="/en/projects--mill-project.php">Mill Projects</a></li>
                            <li><a href="/en/projects--women-garden-project.php">Women's Garden Projects</a></li>
                            <li><a href="/en/projects--other-projects.php">Other Projects</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>                  
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <div class="menu1">
                        <ul>
                            <li><a href="/en/news.php">NEWS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <div class="menu1">
                        <ul>
                            <li><a href="/en/contact.php">CONTACT US</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="/en/make-a-donation.php#section9">
                        <div class="bottom-btn">
                            DONATE
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">Copyright &copy; <?php echo date("Y"); ?> Sen De Gel</div>
                </div>
            </div>
        </div>
    </div>

    <a id="gotop" class="gotop" href="#"><i class="icon icon-arrow-up"></i></a>

</footer>

<script>
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

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-83325913-1', 'auto');
    ga('send', 'pageview');

</script>