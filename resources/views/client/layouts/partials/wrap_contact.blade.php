<div class="contact_us_wrapper">
    <div class="t_container t_flex contact_us">
        <div class="t_flex content_left">
            <div class="heading">{{ __('message.contact') }}</div>
            <div class="message">{{ __('message.contact_description') }}</div>
            <div class="t_flex contact_infos">
                <div class="item">
                    <div class="title">{{ __('message.address') }}</div>
                    <div class="content">{{ $trans['address_textarea'] ?? '' }}</div>
                </div>
                <div class="item">
                    <div class="title">{{ __('message.hotline') }}</div>
                    <div class="content">{{ $trans['phone_number'] ?? '' }}</div>
                </div>
            </div>
            <div class="title_action">{{ __('message.contact_bottom') }}</div>
            <div class="t_flex action">
                <a href="mailto:{{ $trans['email'] ?? '' }}">
                    <button class="t_flex t_button button_banner" type="button">
                        <span class="text">Email Address</span>
                        <span class="icon">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white" />
                            </svg>
                        </span>
                    </button>
                </a>
                <a href="{{ $trans['fb_link'] ?? '' }}">
                    <button class="t_flex t_button button_banner" type="button">
                        <span class="text">Via Facebook</span>
                        <span class="icon">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white" />
                            </svg>
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="content_right">
            <img src="/assets/img/contact.jpeg">
        </div>
    </div>
</div>
