<footer class="content-info">
    {{--  @php(dynamic_sidebar('sidebar-footer'))--}}
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="azarias footer-left">
                    <a href="/">
                        <img src="/app/uploads/2022/02/azarias_logo_desktop_bottom.svg" alt="Azarias Capital Logo">
                    </a>
                </div>
            </div>
            <div class="desktop col-xl-2 col-lg-1 text-center">
                <a href="#section-0" class="btn scroll-to-top">
                    <x-svg.arrow-down/>
                </a>
            </div>
            <div class="col-xl-5 col-lg-6 align-items-end">
                <div class="footer-right">
                    <div class="copyright">
                        © Copyright <?php echo date('Y'); ?>, Azarias Capital Management LP<br><a href="/terms-of-use">Terms of Use</a> |
                        <a href="/privacy-policy">Privacy Policy</a>
                    </div>
                    <div class="mjhudson">
                        <a target="_blank" href="https://www.mjhudson.com/" title="MJ Hudson LLP">
                            <img src="/app/uploads/2021/12/MJ-Hudson-logo.svg" class="footer-logo" alt="MJ Hudson LLP">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- #app end -->

@php(do_action('get_footer'))
@php(wp_footer())
@stack('footer.scripts')

</body>
</div>
</html>
