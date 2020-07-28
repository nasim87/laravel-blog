<!-- FOOTER -->
<footer id="eskimo-footer">
    <div class="container">
        <div class="row eskimo-footer-wrapper">
            <!-- FOOTER WIDGET 1 -->
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h5 class="eskimo-title-with-border"><span>About Me</span></h5>
                <p>Customers have believed me for their excellent projects. Every projects are delivered on time and they are completed successfully with the full 
                    requirements of the customers.  you can also Hire me for your project.
                </p>
                <p><a href="{{route('about')}}" class="btn btn-default">Read More</a></p>
            </div>
            <!-- FOOTER WIDGET 2 -->
            <div class="col-12 col-lg-6">
                <h5 class="eskimo-title-with-border"><span>Newsletter</span></h5>
                <form method="post" action="/subscribe">
                    @csrf
                    <label>Subscribe to our mailing list!</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" placeholder="Your email address" required />
                        <div class="input-group-append"> 
                            <input type="submit" value="Sign up"  class="btn btn-default" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- CREDITS -->
        <div class="eskimo-footer-credits">
            <p>
                Made with love by <a href="https://bboron.com" target="_blank">Nasim Amjad</a>
            </p>
        </div>
    </div>
</footer>