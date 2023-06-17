<footer class="footer" id="footer">
    <div class="container">
        <div class="footer_wrapper">
            <div class="t_container t_flex footer_content">
                <div class="t_flex footer_above">
                    <div class="t_flex social_media">
                        <div class="t_flex social_icon_content">
                            <div class="title">FOLLOW US</div>
                            <div class="t_flex social_icon">
                                <a href="{{ $trans['fb_link'] ?? '' }}">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.9976 0.637695C7.51437 0.637695 0.637573 7.51449 0.637573 15.9977C0.637573 24.4809 7.51437 31.3577 15.9976 31.3577C24.4808 31.3577 31.3576 24.4809 31.3576 15.9977C31.3576 7.51449 24.4808 0.637695 15.9976 0.637695ZM19.636 11.2521H17.3272C17.0536 11.2521 16.7496 11.6121 16.7496 12.0905V13.7577H19.6376L19.2008 16.1353H16.7496V23.2729H14.0248V16.1353H11.5528V13.7577H14.0248V12.3593C14.0248 10.3529 15.4168 8.72249 17.3272 8.72249H19.636V11.2521Z" fill="white" />
                                    </svg>
                                </a>
                                <a href="{{ $trans['yt_link'] ?? '' }}">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.5624 15.7305L14.9688 14.0537C14.6552 13.9081 14.3976 14.0713 14.3976 14.4185V17.5769C14.3976 17.9241 14.6552 18.0873 14.9688 17.9417L18.5608 16.2649C18.876 16.1177 18.876 15.8777 18.5624 15.7305ZM15.9976 0.637695C7.51437 0.637695 0.637573 7.51449 0.637573 15.9977C0.637573 24.4809 7.51437 31.3577 15.9976 31.3577C24.4808 31.3577 31.3576 24.4809 31.3576 15.9977C31.3576 7.51449 24.4808 0.637695 15.9976 0.637695ZM15.9976 22.2377C8.13517 22.2377 7.99757 21.5289 7.99757 15.9977C7.99757 10.4665 8.13517 9.75769 15.9976 9.75769C23.86 9.75769 23.9976 10.4665 23.9976 15.9977C23.9976 21.5289 23.86 22.2377 15.9976 22.2377Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="trustbadge_img">
                            <img src="/client/frontend/images/trustbadge-img.png">
                        </div>
                    </div>
                    <div class="t_flex menu_footer">
                        <div class="box_menu box_menu_1">
                            <div class="title">{{ __('message.aboutUs') }}</div>
                            <ul class="menu_nav">
                                <li>
                                    <a href="/about-us/office">
                                        <span class="text">{{ __('message.company_about') }}</span>
                                        <span class="icon">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83333 5.5C5.3731 5.5 5 5.8731 5 6.33333C5 6.79357 5.3731 7.16667 5.83333 7.16667H12.0942L5.24408 14.0774C4.91864 14.4028 4.91864 14.9304 5.24408 15.2559C5.56951 15.5813 6.09715 15.5813 6.42259 15.2559L13.3333 8.28405V14.6667C13.3333 15.1269 13.7064 15.5 14.1667 15.5C14.6269 15.5 15 15.1269 15 14.6667V6.33333C15 5.8731 14.6269 5.5 14.1667 5.5H5.83333Z" fill="white" />
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/about-us/member">
                                        <span class="text">{{ __('message.member_about') }}</span>
                                        <span class="icon">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83333 5.5C5.3731 5.5 5 5.8731 5 6.33333C5 6.79357 5.3731 7.16667 5.83333 7.16667H12.0942L5.24408 14.0774C4.91864 14.4028 4.91864 14.9304 5.24408 15.2559C5.56951 15.5813 6.09715 15.5813 6.42259 15.2559L13.3333 8.28405V14.6667C13.3333 15.1269 13.7064 15.5 14.1667 15.5C14.6269 15.5 15 15.1269 15 14.6667V6.33333C15 5.8731 14.6269 5.5 14.1667 5.5H5.83333Z" fill="white" />
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="box_menu box_menu_2">
                            <div class="title">{{ __('message.company') }}</div>
                            <ul class="menu_nav">
                                <li>
                                    <a href="/career">
                                        <span class="text">{{ __('message.careers') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact-us">
                                        <span class="text">{{ __('message.contact') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="box_menu box_menu_3">
                            <div class="title">{{ __('message.policy') }}</div>
                            <ul class="menu_nav">
                                <li>
                                    <a href="/policy">
                                        <span class="text">{{ __('message.policy') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="t_flex button_back_to_top">
                        <span class="icon_btt">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5893 7.57758C14.2639 7.25214 13.7362 7.25214 13.4108 7.57758L7.57745 13.4109C7.25202 13.7363 7.25202 14.264 7.57745 14.5894C7.90289 14.9149 8.43053 14.9149 8.75596 14.5894L13.1667 10.1787V19.8335C13.1667 20.2937 13.5398 20.6668 14 20.6668C14.4603 20.6668 14.8334 20.2937 14.8334 19.8335V10.1787L19.2441 14.5894C19.5696 14.9149 20.0972 14.9149 20.4226 14.5894C20.7481 14.264 20.7481 13.7363 20.4226 13.4109L14.5893 7.57758Z" fill="white" />
                                <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="white" />
                            </svg>
                        </span>
                        <span class="text">{{ __('message.gotop') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</form>
</div>
</div>
<script>
    let MESS_FULL_NAME = "{{ __('message.required_fullname') }}";
    let MESS_EMAIL = "{{ __('message.required_email') }}";
    let MESS_TEL = "{{ __('message.required_tel') }}";
    let MESS_MESSAGE = "{{ __('message.required_message') }}";
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/client/frontend/js/theme.js"></script>
<script src="/client/frontend/js/main.js"></script>
<script src="/client/backend/js/toastr.min5f52.js?1683168683"></script>
<script type="text/javascript">
$(function() {
toastr.options = {
    "debug": false,
    "positionClass": "toast-top-right",
    "onclick": null,
    "fadeIn": 300,
    "fadeOut": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000
};
});
</script>