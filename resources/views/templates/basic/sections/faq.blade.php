<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pricing - MailPoet</title>
    <meta name="_csrf" content="LriW4jnX-FwCwRAs5MWCoJBRkJmwBH5sg0nE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fe5301">
    <meta name="referrer" content="origin">
    <link rel="icon" href="/images/favicon-32x32.png" type="image/png" sizes="32x32">
    <link rel="icon" href="/images/favicon-16x16.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://use.typekit.net/aps3nxt.css?ver=5.1.1" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/faq.css')}}">
    <script type="text/javascript" nonce="a0aa4e28-2231-4051-9a6d-8ab7feb4b8b4">window.productInCart = null;
        window.orderTrackingData = null; window.isUserLoggedIn = false;</script>
    <script type="text/javascript" nonce="c3a1f25a-cb22-404a-9dea-44000ffbcfda">(function (e, a) {
            if (!a.__SV) {
                var b = window;
                try {
                    var c,
                        l,
                        i,
                        j = b.location,
                        g = j.hash;
                    c = function (a, b) {
                        return (l = a.match(RegExp(b + '=([^&]*)'))) ? l[1] : null;
                    };
                    g && c(g, 'state') && ((i = JSON.parse(decodeURIComponent(c(g, 'state')))), 'mpeditor' === i.action && (b.sessionStorage.setItem('_mpcehash', g), history.replaceState(i.desiredHash || '', e.title, j.pathname + j.search)));
                } catch (m) { }
                var k, h;
                window.mixpanel = a;
                a._i = [];
                a.init = function (b, c, f) {
                    function e(b, a) {
                        var c = a.split('.');
                        2 == c.length && ((b = b[c[0]]), (a = c[1]));
                        b[a] = function () {
                            b.push([a].concat(Array.prototype.slice.call(arguments, 0)));
                        };
                    }
                    var d = a;
                    'undefined' !== typeof f ? (d = a[f] = []) : (f = 'mixpanel');
                    d.people = d.people || [];
                    d.toString = function (b) {
                        var a = 'mixpanel';
                        'mixpanel' !== f && (a += '.' + f);
                        b || (a += ' (stub)');
                        return a;
                    };
                    d.people.toString = function () {
                        return d.toString(1) + '.people (stub)';
                    };
                    k = 'disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user'.split(' ');
                    for (h = 0; h < k.length; h++) e(d, k[h]);
                    a._i.push([b, c, f]);
                };
                a.__SV = 1.2;
                b = e.createElement('script');
                b.nonce = 'c82a6446-2574-4694-b26d-28f48da2683c';
                b.type = 'text/javascript';
                b.async = !0;
                b.src = 'undefined' !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : 'file:' === e.location.protocol && '//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js'.match(/^\/\//) ? 'https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js' : '//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js';
                c = e.getElementsByTagName('script')[0];
                c.parentNode.insertBefore(b, c);
            }
        })(document, window.mixpanel || []);
        mixpanel.init('8cce373b255e5a76fb22d57b85db0c92');
        mixpanel.set_config({ secure_cookie: window.location.protocol === 'https:' });
        mixpanel.register({ Platform: 'Shop' });
    </script>
    <script type="text/javascript" nonce="49104afa-67b7-4cb6-bbd5-15e8df704f38"></script>
    <script type="text/javascript" nonce="9ee6cf4d-0fd4-494f-8246-b1ae68548078">const YEAR_IN_DAYS = 365;
        const COUNTRY_COOKIE_NAME = 'country_code';
        const IS_GDPR = 'is_gdpr';
        const ANALYTICS_COOKIE_NAME = 'mailpoet_cookie_consent_analytics';
        const ADVERTISING_COOKIE_NAME = 'mailpoet_cookie_consent_advertising';
        const GRANTED = 'granted';
        const DENIED = 'denied';

        function setCookie(name, value, expiryDays) {
            const domainParts = window.location.hostname.split('.');
            const domain = domainParts.slice(Math.max(domainParts.length - 2, 0)).join('.');
            const DAY_IN_MILLISECONDS = 24 * 60 * 60 * 1000;
            let expires = '';
            if (expiryDays) {
                const date = new Date();
                date.setTime(date.getTime() + expiryDays * DAY_IN_MILLISECONDS);
                expires = `expires=${date.toUTCString()}; `;
            }
            document.cookie = `${encodeURIComponent(name)}=${encodeURIComponent(value)}; ${expires} ; Path=/; Domain=${domain}`;
        }

        function deleteCookie(name) {
            setCookie(name, null, -99999);
        }

        function getCookie(name) {
            return document.cookie
                .split('; ')
                .find((row) => row.startsWith(name + '='))
                ?.split('=')[1];
        }

        function getAnalyticsConsentCookie() {
            return getCookie(ANALYTICS_COOKIE_NAME);
        }

        function getAdvertisingConsentCookie() {
            return getCookie(ADVERTISING_COOKIE_NAME);
        }

        function getCountryCode() {
            return getCookie(COUNTRY_COOKIE_NAME);
        }

        function isGdpr() {
            return getCookie(IS_GDPR);
        }

        function setAnalyticsConsentCookie(value) {
            // If we deny analytics we need to remove certain tracking cookies.
            if (value === DENIED) {
                // GA cookies
                deleteCookie('gaUserTypeShort');
                deleteCookie('gaUserTypeLong');
                // Tracks cookies
                deleteCookie('tk_ai');
            }
            setCookie(ANALYTICS_COOKIE_NAME, value, YEAR_IN_DAYS);
        }

        function setAdvertisingConsentCookie(value) {
            setCookie(ADVERTISING_COOKIE_NAME, value, YEAR_IN_DAYS);
        }

        function canTrackUser(consentType) {
            const consentTypes = ['analytics', 'advertising'];
            if (!consentTypes.includes(consentType)) {
                throw new Error(`Unrecognised cookie consent type ${consentType}`);
            }

            const consentCookie = getCookie(`mailpoet_cookie_consent_${consentType}`);

            // If user has denied consent for either type of tracking,
            // wherever they're visiting from, don't set cookie.
            if (consentCookie === DENIED) {
                return false;
            }

            if (consentType === 'advertising' && consentCookie !== GRANTED) {
                // If we're in a GDPR country and user hasn't explicitly
                // consented to advertising, don't set cookie
                if (isGdpr()) {
                    return false;
                }

                // If user has the GPC set and hasn't explicitly
                // consented to advertising, don't set cookie
                if (navigator?.globalPrivacyControl) {
                    return false;
                }
            }

            return true;
        }</script>
    <script type="text/javascript"
            nonce="071fb05a-0dc9-4843-932b-66a903b6270a">window.dataLayer = window.dataLayer || []; window.dataLayer.push({ page_name: '/ga-virtual/pricing', site_section: 'account', login_status: 'logged out', });</script>
    <script type="text/javascript" nonce="1194118a-56b6-48e0-9bad-0774a8e21898">//
        function gtag() {
            dataLayer.push(arguments);
        }
        // function for initialization Google Tag Manager
        function initGTM(w, d, s, l, i) {
            window.gtag('consent', 'update', {
                ad_storage: window.canTrackUser('advertising') ? GRANTED : DENIED,
                analytics_storage: window.canTrackUser('analytics') ? GRANTED : DENIED,
            });
            // eslint-disable-next-line no-param-reassign
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js',
            });
            const f = d.getElementsByTagName(s)[0];
            const j = d.createElement(s);
            const dl = l !== 'dataLayer' ? `&l=${l}` : '';
            j.async = true;
            j.setAttribute('nonce', 'e42de741-3daa-4fa9-ac59-7146cfaa242a');
            j.src = `https://www.googletagmanager.com/gtm.js?id=${i}${dl}`;
            f.parentNode.insertBefore(j, f);
        }
        // Define dataLayer and the gtag function.
        window.dataLayer = window.dataLayer || [];
        // Set default consent.
        gtag('consent', 'default', {
            ad_storage: isGdpr() === true ? 'denied' : 'granted',
            analytics_storage: 'granted',
            functionality_storage: 'granted',
            personalization_storage: 'granted',
            security_storage: 'granted',
        });
        // call init function
        window.initGTM(window, document, 'script', 'dataLayer', 'GTM-MX5LJ9Q');</script>
</head>

<body>
@php
    $content  = getContent('faq.content', true);
    $elements = getContent('faq.element', false);
@endphp

<div class="faq-container">
{{--    <h1 class="has-text-centered my-5">Got questions?</h1>--}}
{{--    <input class="faq-checkbox" id="faq_6" type="checkbox" name="faq_6">--}}
{{--    <div class="faq-item">--}}
{{--        <label class="faq-question" for="faq_6">--}}
{{--            <h2>How do I know which plan is the best for my needs?</h2>--}}
{{--            <div class="faq-icon">&times;</div>--}}
{{--        </label>--}}
{{--        <div class="faq-answer">--}}
{{--            <p>We generally recommend the “Business” plan for most sites, as it allows you to immediately focus on--}}
{{--                growing your business with ready-made marketing tools, reliable email delivery, and managed sender--}}
{{--                reputation. If you enjoy self-hosting – the “Creator” plan would be a good fit too.</p>--}}
{{--            <p>If you’re looking to use MailPoet on multiple sites – choose the “Agency” plan. And if you’re just--}}
{{--                testing the waters – explore email marketing with the “Starter” plan at no cost.</p>--}}
{{--            <p>Choose the number of subscribers in your plan based on how many people you intend to send email--}}
{{--                marketing campaigns to. <b><a--}}
{{--                        href="https:&#x2F;&#x2F;kb.mailpoet.com&#x2F;article&#x2F;348-subscribers-limit-for-sending-plans"--}}
{{--                        target='_blank'>Read more about it here</a></b>.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <input class="faq-checkbox" id="faq_7" type="checkbox" name="faq_7">--}}
{{--    <div class="faq-item">--}}
{{--        <label class="faq-question" for="faq_7">--}}
{{--            <h2>What are the advanced features included in the Creator, Business, and Agency plans?</h2>--}}
{{--            <div class="faq-icon">&times;</div>--}}
{{--        </label>--}}
{{--        <div class="faq-answer">--}}
{{--            <ul class="features new-pricing">--}}
{{--                <li><b>Detailed email engagement and commerce analytics - </b> understand how your subscribers--}}
{{--                    engage with your emails via open, click, unsubscribe statistics, how email drives WooCommerce--}}
{{--                    purchasing behavior – total revenue, number of orders, products purchased.</li>--}}
{{--                <li><b>Google Analytics integration - </b> associate website visits with your email marketing--}}
{{--                    campaigns in Google Analytics.</li>--}}
{{--                <li><b>Property and behavior-based subscriber segmentation - </b> target your email campaigns to--}}
{{--                    subscribers based on multiple properties and behaviors, such as to re-engage subscribers who--}}
{{--                    have not recently read any of your newsletters, or customers from a specific set of countries--}}
{{--                    who have not purchased anything recently.</li>--}}
{{--            </ul>--}}
{{--            <p>For full details on what’s included in MailPoet, take a look at <b><a--}}
{{--                        href="https:&#x2F;&#x2F;www.mailpoet.com&#x2F;mailpoet-features" target='_blank'> our--}}
{{--                        features.</a></b></p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <input class="faq-checkbox mss-description-checkbox" id="faq_8" type="checkbox" name="faq_8">--}}
{{--    <div class="faq-item mss-description-faq">--}}
{{--        <label class="faq-question" for="faq_8">--}}
{{--            <h2>What is the MailPoet Sending Service?</h2>--}}
{{--            <div class="faq-icon">&times;</div>--}}
{{--        </label>--}}
{{--        <div class="faq-answer">--}}
{{--            <p>The MailPoet Sending Service is designed to handle the demands of WordPress and sends your emails for--}}
{{--                you. Our service enables you to send over 50,000 emails per hour, with unparalleled speed and--}}
{{--                performance, and over 99% uptime. We’re the only email provider for WordPress that can offer its own--}}
{{--                advanced email delivery infrastructure.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <input class="faq-checkbox" id="faq_9" type="checkbox" name="faq_9">--}}
{{--    <div class="faq-item">--}}
{{--        <label class="faq-question" for="faq_9">--}}
{{--            <h2>Why should I use the MailPoet Sending Service?</h2>--}}
{{--            <div class="faq-icon">&times;</div>--}}
{{--        </label>--}}
{{--        <div class="faq-answer">--}}
{{--            <p>MailPoet Sending Service reliably delivers your email marketing campaigns and helps you to ensure--}}
{{--                that your emails always reach their destination and no email is left behind. We deliver millions of--}}
{{--                emails each month and offer a carefully maintained 98.5% deliverability rate, often exceeding--}}
{{--                industry standards.</p>--}}
{{--            <p>Whether you send 10 or 100,000 emails a day, the MailPoet Sending Service routinely handles small--}}
{{--                business newsletters through to huge mailing lists with tens of thousands of subscribers.</p>--}}
{{--            <p>If you’re using the Business or Agency plan, there’s no restriction on the number of emails you can--}}
{{--                send with the MailPoet Sending Service. Our Starter plan is capped at 5,000 emails per month.</p>--}}
{{--            <p>Sending emails with your web host is a bad idea, and one we’ve written about <b><a--}}
{{--                        href="https:&#x2F;&#x2F;kb.mailpoet.com&#x2F;article&#x2F;154-why-you-shouldnt-send-with-your-host"--}}
{{--                        target='_blank'> here.</a></b> We strongly encourage you to make the switch to the MailPoet--}}
{{--                Sending Service or a third-party email service provider for reliable email delivery.</p>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="faq-container">
        <h1 class="has-text-centered my-5">Câu hỏi thường gặp?</h1>
        @foreach ($elements as $item)
            <input class="faq-checkbox" id="{{$item->data_values->stt}}" type="checkbox" name="{{$item->data_values->stt}}">
            <div class="faq-item">
                <label class="faq-question" for="{{$item->data_values->stt}}">
                    <h2>{{ __($item->data_values->question) }}</h2>
                    <div class="faq-icon">&times;</div>
                </label>
                <div class="faq-answer">
                    <p>{{ __($item->data_values->answer) }}</p>
                </div>
            </div>
        @endforeach
        <div class="divider"></div>

</div>


<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="/javascripts/main.24c6154b9246dd936e79.js"></script>
<script type="text/javascript" src="https://use.typekit.net/nkb6vev.js"
        nonce="02549c64-d222-40ee-9381-304fe42b222e"></script>
<script type="text/javascript" nonce="3438687d-3ad3-4998-8203-4eaf5325e38d">try {
        Typekit.load({ async: true });
    } catch (e) { }</script>
<script type="text/javascript" nonce="53ea94e2-3c93-4a28-b6f5-e8d1867635c3">(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        (i[r] =
            i[r] ||
            function () {
                (i[r].q = i[r].q || []).push(arguments);
            }),
            (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        a.setAttribute('nonce', '53ea94e2-3c93-4a28-b6f5-e8d1867635c3');
        m.parentNode.insertBefore(a, m);
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-26853752-7', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>



