var _0xb2ab8c = _0x5144;
(function(_0x2f9719, _0x16fbf2) {
    var _0x2b4445 = _0x5144
      , _0x490bd7 = _0x2f9719();
    while (!![]) {
        try {
            var _0xf5a8b5 = -parseInt(_0x2b4445(0x141)) / 0x1 + -parseInt(_0x2b4445(0x256)) / 0x2 * (-parseInt(_0x2b4445(0x260)) / 0x3) + -parseInt(_0x2b4445(0x2cb)) / 0x4 * (-parseInt(_0x2b4445(0x148)) / 0x5) + parseInt(_0x2b4445(0x27d)) / 0x6 + parseInt(_0x2b4445(0x1d7)) / 0x7 + -parseInt(_0x2b4445(0x1b9)) / 0x8 * (parseInt(_0x2b4445(0x29a)) / 0x9) + -parseInt(_0x2b4445(0x1ec)) / 0xa;
            if (_0xf5a8b5 === _0x16fbf2)
                break;
            else
                _0x490bd7['push'](_0x490bd7['shift']());
        } catch (_0x47d5c9) {
            _0x490bd7['push'](_0x490bd7['shift']());
        }
    }
}(_0x2801, 0x74686));
function _0x5144(_0x22e8e3, _0x1b3a30) {
    var _0x280123 = _0x2801();
    return _0x5144 = function(_0x514410, _0xc24bd0) {
        _0x514410 = _0x514410 - 0x122;
        var _0x1956d0 = _0x280123[_0x514410];
        return _0x1956d0;
    }
    ,
    _0x5144(_0x22e8e3, _0x1b3a30);
}
var raffles = function(_0x365598) {
    'use strict';
    var _0x2c0ea6 = _0x5144;
    var _0x439f83 = {}
      , _0x281b33 = _0x365598[_0x2c0ea6(0x191)]()
      , _0x476ef7 = _0x365598(_0x2c0ea6(0x1d2))
      , _0x3960ea = _0x365598(document);
    _0x439f83[_0x2c0ea6(0x1e1)] = {},
    _0x439f83[_0x2c0ea6(0x2a8)] = {},
    _0x439f83['_localCache'] = {},
    _0x439f83[_0x2c0ea6(0x25c)] = Modernizr['touchevents'],
    _0x439f83[_0x2c0ea6(0x1b2)] = 0x1f4,
    _0x439f83[_0x2c0ea6(0x321)] = _0x2c0ea6(0x276),
    _0x439f83[_0x2c0ea6(0x1ed)] = Modernizr['cssanimations'],
    _0x439f83[_0x2c0ea6(0x2bd)] = 'webkitAnimationEnd\x20mozAnimationEnd\x20MSAnimationEnd\x20oanimationend\x20animationend',
    _0x439f83[_0x2c0ea6(0x15e)] = getComputedStyle(document[_0x2c0ea6(0x1d2)])[_0x2c0ea6(0x15a)] === _0x2c0ea6(0x303),
    _0x439f83[_0x2c0ea6(0x2f7)] = !Modernizr[_0x2c0ea6(0x24c)],
    _0x439f83[_0x2c0ea6(0x22e)] = window['navigator']['userAgent'][_0x2c0ea6(0x1f7)](_0x2c0ea6(0x122)) != -0x1,
    _0x439f83['afterDOMReady'] = function() {
        var _0x3a0af3 = _0x2c0ea6
          , _0x1ea347 = this;
        if (this['ISFIREFOX'])
            window[_0x3a0af3(0x1f2)] = function() {}
            ;
        if (this[_0x3a0af3(0x2f7)]) {
            this['helpers'][_0x3a0af3(0x2c2)] && this['helpers'][_0x3a0af3(0x2c2)]({
                'before': _0x3a0af3(0x12a),
                'content': _0x3a0af3(0x32d)
            });
            if (this['modules'][_0x3a0af3(0x1dc)])
                this[_0x3a0af3(0x1e1)][_0x3a0af3(0x1dc)]();
            return;
        }
        this[_0x3a0af3(0x1e1)][_0x3a0af3(0x142)] && this[_0x3a0af3(0x1e1)][_0x3a0af3(0x142)]({
            'easing': 'easeOutQuint',
            'speed': 0x226,
            'cssPrefix': _0x3a0af3(0x2f2)
        });
        if (this[_0x3a0af3(0x2a8)][_0x3a0af3(0x1e5)])
            this[_0x3a0af3(0x2a8)]['toggledFields']();
        if (window[_0x3a0af3(0x295)])
            window['rafflesEventsCalendar'][_0x3a0af3(0x240)](_0x365598(_0x3a0af3(0x2c0)), {
                'isTouch': _0x1ea347['ISTOUCH'],
                'cssPrefix': 'raffles-',
                'breakpoint': 0x300
            });
        window[_0x3a0af3(0x14e)] && new window[(_0x3a0af3(0x14e))]({
            'cssPrefix': _0x3a0af3(0x2f2)
        });
        if (window[_0x3a0af3(0x2c1)]) {
            var _0x3eab8c = _0x365598(_0x3a0af3(0x12f));
            _0x3eab8c[_0x3a0af3(0x184)] && new window[(_0x3a0af3(0x2c1))](_0x3eab8c,{
                'animationEasing': _0x1ea347[_0x3a0af3(0x321)],
                'animationDuration': _0x1ea347['ANIMATIONDURATION']
            });
        }
        if (this[_0x3a0af3(0x1e1)][_0x3a0af3(0x208)])
            this[_0x3a0af3(0x1e1)]['dropdown'][_0x3a0af3(0x240)]();
        if (this[_0x3a0af3(0x1e1)][_0x3a0af3(0x299)])
            this[_0x3a0af3(0x1e1)][_0x3a0af3(0x299)]();
        if (this[_0x3a0af3(0x1e1)][_0x3a0af3(0x189)])
            this[_0x3a0af3(0x1e1)]['hiddenSections']();
        if (this[_0x3a0af3(0x1e1)][_0x3a0af3(0x23c)])
            this[_0x3a0af3(0x1e1)]['viewTypes']();
        if (this['helpers'][_0x3a0af3(0x1eb)])
            this['helpers'][_0x3a0af3(0x1eb)]();
        var _0x5b2371 = _0x365598(_0x3a0af3(0x174));
        _0x365598['fn'][_0x3a0af3(0x1cb)] && _0x5b2371['length'] && _0x5b2371[_0x3a0af3(0x1cb)]({
            'range': !![],
            'min': 0x0,
            'max': 0x3e7,
            'values': [0xc8, 0x320],
            'slide': function(_0x102bdc, _0x389eaa) {
                var _0xa917e = _0x3a0af3
                  , _0x4b5652 = _0x365598(_0x389eaa['handle'])[_0xa917e(0x182)](_0xa917e(0x174))
                  , _0xdf791f = _0x4b5652['siblings'](_0xa917e(0x306))
                  , _0x3e42a7 = _0x4b5652['siblings'](_0xa917e(0x17d));
                _0x4b5652['length'] && _0xdf791f['length'] && (_0xdf791f[_0xa917e(0x23e)]('value', '$' + _0x4b5652[_0xa917e(0x1cb)](_0xa917e(0x188), 0x0))[_0xa917e(0x1de)]('$' + _0x4b5652[_0xa917e(0x1cb)](_0xa917e(0x188), 0x0)),
                _0x3e42a7[_0xa917e(0x23e)](_0xa917e(0x125), '$' + _0x4b5652[_0xa917e(0x1cb)](_0xa917e(0x188), 0x1))[_0xa917e(0x1de)]('$' + _0x4b5652[_0xa917e(0x1cb)](_0xa917e(0x188), 0x1)));
            }
        });

        var _0x5a7411 = _0x365598(_0x3a0af3(0x124));
        _0x5a7411[_0x3a0af3(0x184)] && _0x5a7411['rafflesCustomSelect']({
            'cssPrefix': 'raffles-'
        });
        var _0x120f70 = _0x365598('.raffles-newsletter-form');
        _0x120f70[_0x3a0af3(0x184)] && window['rafflesNewsletter'] && window[_0x3a0af3(0x26e)](_0x120f70);
        var _0x31b8b8 = _0x365598('.raffles-contact-form');
        _0x31b8b8[_0x3a0af3(0x184)] && window[_0x3a0af3(0x1c9)] && rafflesContactForm[_0x3a0af3(0x240)](_0x31b8b8);
        _0x365598[_0x3a0af3(0x311)] && _0x365598[_0x3a0af3(0x311)][_0x3a0af3(0x140)] && _0x365598['extend'](_0x365598['fancybox']['defaults'], {
            'transitionEffect': _0x3a0af3(0x1d9),
            'transitionDuration': _0x1ea347[_0x3a0af3(0x1b2)],
            'animationDuration': _0x1ea347[_0x3a0af3(0x1b2)]
        });
        if (this[_0x3a0af3(0x1e1)][_0x3a0af3(0x128)])
            this[_0x3a0af3(0x1e1)][_0x3a0af3(0x128)][_0x3a0af3(0x240)](_0x365598(_0x3a0af3(0x181)));
        var _0x123dee = _0x365598(_0x3a0af3(0x21e))
          , _0x1ca293 = _0x365598('.raffles-navigation-vertical');
        _0x123dee[_0x3a0af3(0x184)] && _0x123dee[_0x3a0af3(0x274)]({
            'cssPrefix': _0x3a0af3(0x2f2),
            'mobileBreakpoint': 0x401
        });
        _0x1ca293[_0x3a0af3(0x184)] && _0x1ca293[_0x3a0af3(0x274)]({
            'cssPrefix': 'raffles-',
            'mobileBreakpoint': 0x2710
        });
        _0x365598(_0x3a0af3(0x270))['on'](_0x3a0af3(0x2e8), function(_0x56fef2) {
            var _0x145ba9 = _0x3a0af3;
            _0x56fef2[_0x145ba9(0x2fa)];
        });
        var _0x274ce0 = _0x365598('.raffles-countdown');
        _0x274ce0[_0x3a0af3(0x184)] && _0x274ce0[_0x3a0af3(0x1b1)](function() {
            var _0x50e0bb = _0x3a0af3
              , _0x30c573 = _0x365598(this)
              , _0x356163 = _0x30c573[_0x50e0bb(0x2b9)]()
              , _0x551af0 = new Date(_0x356163[_0x50e0bb(0x199)],_0x356163[_0x50e0bb(0x226)] || 0x0,_0x356163[_0x50e0bb(0x1bc)] || 0x1,_0x356163[_0x50e0bb(0x230)] || 0x0,_0x356163[_0x50e0bb(0x12b)] || 0x0,_0x356163[_0x50e0bb(0x1f3)] || 0x0);
            _0x30c573[_0x50e0bb(0x263)]({
                'until': _0x551af0,
                'padZeroes': !![],
                'format': _0x50e0bb(0x150),
                'labels': ['Years', _0x50e0bb(0x31c), _0x50e0bb(0x2cc), _0x50e0bb(0x1e8), 'Hours', _0x50e0bb(0x1b4), _0x50e0bb(0x29e)],
                'labels1': [_0x50e0bb(0x1c7), _0x50e0bb(0x31c), _0x50e0bb(0x2cc), 'Days', _0x50e0bb(0x155), _0x50e0bb(0x1b4), 'Seconds']
            });
        });
        var _0xfaee76 = _0x365598('#rev-slider-1'), _0x19594c;
        _0xfaee76[_0x3a0af3(0x184)] && _0x365598['fn'][_0x3a0af3(0x2eb)] && (_0x19594c = _0xfaee76[_0x3a0af3(0x1b7)]()[_0x3a0af3(0x2eb)]({
            'dottedOverlay': _0x3a0af3(0x2a7),
            'disableProgressBar': 'on',
            'spinner': 'spinner3',
            'gridwidth': [0x5d0, 0x400, 0x400, 0x244],
            'gridheight': [0x398, 0x398, 0x398, 0x2d0],
            'responsiveLevels': [0x5a0, 0x400, 0x334, 0x244, 0x1e0, 0x140],
            'navigation': {
                'keyboardNavigation': 'on',
                'keyboard_direction': _0x3a0af3(0x1d4),
                'onHoverStop': _0x3a0af3(0x287),
                'arrows': {
                    'enable': ![]
                },
                'bullets': {
                    'enable': !![],
                    'style': _0x3a0af3(0x2a7),
                    'hide_onleave': ![],
                    'h_align': _0x3a0af3(0x319),
                    'v_align': 'bottom',
                    'direction': 'horisontal',
                    'h_offset': 0x0,
                    'v_offset': 0x38
                }
            }
        }));
        if (this[_0x3a0af3(0x2a8)][_0x3a0af3(0x25f)])
            this[_0x3a0af3(0x2a8)]['revArrowsOutside']();
        var _0x1ebd93 = _0x365598(_0x3a0af3(0x1ff));
        if (_0x1ebd93[_0x3a0af3(0x184)] && _0x365598['fn'][_0x3a0af3(0x2eb)]) {
            var _0x25e0d4, _0x2984c9;
            (function() {
                var _0x10fba9 = _0x3a0af3;
                if (!/loaded|interactive|complete/[_0x10fba9(0x228)](document[_0x10fba9(0x2b4)]))
                    document[_0x10fba9(0x198)]('DOMContentLoaded', _0xbf6119);
                else
                    _0xbf6119();
                function _0xbf6119() {
                    var _0x20390e = _0x10fba9;
                    if (_0x2984c9 === undefined) {
                        _0x2984c9 = jQuery;
                        if (_0x20390e(0x156) == 'on')
                            _0x2984c9['noConflict']();
                    }
                    _0x2984c9(_0x20390e(0x307))[_0x20390e(0x2eb)] == undefined ? revslider_showDoubleJqueryError(_0x20390e(0x307)) : _0x25e0d4 = _0x2984c9(_0x20390e(0x307))['show']()[_0x20390e(0x2eb)]({
                        'sliderType': 'standard',
                        'jsFileLocation': _0x20390e(0x2ce),
                        'sliderLayout': _0x20390e(0x291),
                        'dottedOverlay': 'none',
                        'delay': 0x251c,
                        'navigation': {
                            'onHoverStop': 'off'
                        },
                        'visibilityLevels': [0x4d8, 0x400, 0x30a, 0x1e0],
                        'gridwidth': 0x780,
                        'gridheight': 0x4b0,
                        'responsiveLevels': [0x5a0, 0x400, 0x32d, 0x244],
                        'lazyType': _0x20390e(0x22b),
                        'shadow': 0x0,
                        'spinner': _0x20390e(0x297),
                        'stopLoop': 'off',
                        'stopAfterLoops': -0x1,
                        'stopAtSlide': -0x1,
                        'shuffle': 'off',
                        'autoHeight': 'off',
                        'disableProgressBar': 'on',
                        'hideThumbsOnMobile': _0x20390e(0x156),
                        'hideSliderAtLimit': 0x0,
                        'hideCaptionAtLimit': 0x0,
                        'hideAllCaptionAtLilmit': 0x0,
                        'startWithSlide': 0x0,
                        'debugMode': ![],
                        'fallbacks': {
                            'simplifyAll': _0x20390e(0x156),
                            'nextSlideOnWindowFocus': _0x20390e(0x156),
                            'disableFocusListener': ![]
                        }
                    });
                    ;
                }
                ;
            }());
        }
        var _0x136517 = _0x365598('.raffles-panels--accordion')
          , _0x2b804a = _0x365598(_0x3a0af3(0x202));
        _0x136517[_0x3a0af3(0x184)] && _0x136517[_0x3a0af3(0x24f)]({
            'easing': _0x1ea347[_0x3a0af3(0x321)],
            'speed': _0x1ea347['ANIMATIONDURATION'],
            'cssPrefix': _0x3a0af3(0x2f2)
        });
        _0x2b804a['length'] && _0x2b804a[_0x3a0af3(0x24f)]({
            'easing': _0x1ea347[_0x3a0af3(0x321)],
            'speed': _0x1ea347['ANIMATIONDURATION'],
            'toggle': !![],
            'cssPrefix': 'raffles-'
        });
        var _0x56a6a8 = _0x365598(_0x3a0af3(0x12d));
        _0x56a6a8[_0x3a0af3(0x29d)]('.raffles-alert-box--success')[_0x3a0af3(0x184)] && rafflesAlertBox[_0x3a0af3(0x240)](_0x56a6a8[_0x3a0af3(0x29d)](_0x3a0af3(0x267)), {
            'duration': _0x1ea347[_0x3a0af3(0x1b2)],
            'cssPrefix': _0x3a0af3(0x2f2),
            'easing': _0x1ea347[_0x3a0af3(0x321)],
            'type': 'success'
        });
        _0x56a6a8[_0x3a0af3(0x29d)](_0x3a0af3(0x318))[_0x3a0af3(0x184)] && rafflesAlertBox[_0x3a0af3(0x240)](_0x56a6a8[_0x3a0af3(0x29d)](_0x3a0af3(0x318)), {
            'duration': _0x1ea347['ANIMATIONDURATION'],
            'cssPrefix': _0x3a0af3(0x2f2),
            'easing': _0x1ea347[_0x3a0af3(0x321)],
            'type': _0x3a0af3(0x19d)
        });
        _0x56a6a8[_0x3a0af3(0x29d)](_0x3a0af3(0x1c0))['length'] && rafflesAlertBox[_0x3a0af3(0x240)](_0x56a6a8[_0x3a0af3(0x29d)]('.raffles-alert-box--info'), {
            'duration': _0x1ea347['ANIMATIONDURATION'],
            'cssPrefix': _0x3a0af3(0x2f2),
            'easing': _0x1ea347[_0x3a0af3(0x321)],
            'type': _0x3a0af3(0x20a)
        });
        _0x56a6a8[_0x3a0af3(0x29d)](_0x3a0af3(0x227))[_0x3a0af3(0x184)] && rafflesAlertBox[_0x3a0af3(0x240)](_0x56a6a8[_0x3a0af3(0x29d)](_0x3a0af3(0x227)), {
            'duration': _0x1ea347[_0x3a0af3(0x1b2)],
            'cssPrefix': 'raffles-',
            'easing': _0x1ea347['ANIMATIONEASING'],
            'type': _0x3a0af3(0x195)
        });
        _0x365598(_0x3a0af3(0x1b0))['length'] && _0x365598['fn'][_0x3a0af3(0x217)] && _0x365598(_0x3a0af3(0x1b0))[_0x3a0af3(0x217)]({
            'animationIn': 'fadeInDown',
            'animationOut': _0x3a0af3(0x252),
            'tooltipPosition': 'top',
            'jQueryAnimationEasing': _0x1ea347[_0x3a0af3(0x321)],
            'jQueryAnimationDuration': _0x1ea347[_0x3a0af3(0x1b2)],
            'skin': _0x3a0af3(0x2a7)
        });
        _0x365598(window)['on'](_0x3a0af3(0x19c), function() {
            var _0x508efc = _0x3a0af3
              , _0x280939 = _0x365598(_0x508efc(0x212));
            _0x280939[_0x508efc(0x184)] && window[_0x508efc(0x143)] && _0x280939[_0x508efc(0x1b1)](function(_0x365654, _0x2583be) {
                var _0xc0b2f6 = _0x508efc
                  , _0x170012 = _0x365598(_0x2583be)
                  , _0x46e47b = _0x170012[_0xc0b2f6(0x182)](_0xc0b2f6(0x18c));
                _0x46e47b['length'] ? _0x46e47b['on'](_0xc0b2f6(0x1a9), function() {
                    var _0x2d223b = _0xc0b2f6;
                    if (_0x170012[_0x2d223b(0x2b9)](_0x2d223b(0x14b)))
                        return;
                    rafflesIsotopeWrapper[_0x2d223b(0x240)](_0x170012, {
                        'itemSelector': _0x2d223b(0x293),
                        'transitionDuration': _0x1ea347[_0x2d223b(0x1b2)]
                    });
                }) : rafflesIsotopeWrapper['init'](_0x170012, {
                    'itemSelector': _0xc0b2f6(0x293),
                    'transitionDuration': _0x1ea347['ANIMATIONDURATION']
                });
            });
        });
        var _0x182d73 = _0x365598('[data-bg-image-src]:not([class*=\x22raffles-colorizer--scheme-\x22])');
        _0x182d73[_0x3a0af3(0x184)] && this[_0x3a0af3(0x2a8)]['dynamicBgImage'] && this[_0x3a0af3(0x2a8)][_0x3a0af3(0x1b8)](_0x182d73);
        if (_0x365598(_0x3a0af3(0x19e))[_0x3a0af3(0x184)])
            this[_0x3a0af3(0x2a8)]['owlAdaptive']();
        var _0x205da5 = _0x365598(_0x3a0af3(0x21a))
          , _0x41a2c8 = _0x365598(_0x3a0af3(0x167));
        _0x205da5['length'] && _0x365598['fn'][_0x3a0af3(0x196)] && _0x205da5[_0x3a0af3(0x1b1)](function(_0x54a97a, _0xfece85) {
            var _0x38cf47 = _0x3a0af3
              , _0x546f42 = _0x365598(_0xfece85)
              , _0x53b02e = _0x546f42[_0x38cf47(0x182)]('.raffles-section--stretched-content,\x20.raffles-section--stretched-content-no-px');
            _0x53b02e[_0x38cf47(0x184)] ? _0x53b02e['each'](function(_0x40a6b8, _0x309221) {
                var _0x50af34 = _0x38cf47;
                _0x365598(_0x309221)['on'](_0x50af34(0x1a9), function() {
                    var _0x4f1e76 = _0x50af34;
                    _0x546f42[_0x4f1e76(0x196)](_0x1ea347[_0x4f1e76(0x2a8)][_0x4f1e76(0x2a6)]({
                        'margin': 0x1,
                        'animateOut': _0x4f1e76(0x248),
                        'loop': !![],
                        'autoplay': !![],
                        'dots': ![],
                        'autoplay': _0x546f42[_0x4f1e76(0x2f9)]('raffles-simple-slideshow--autoplay')
                    }));
                });
            }) : _0x546f42[_0x38cf47(0x196)](_0x1ea347[_0x38cf47(0x2a8)][_0x38cf47(0x2a6)]({
                'margin': 0x1,
                'animateOut': _0x38cf47(0x248),
                'loop': !![],
                'autoplay': !![],
                'dots': ![]
            }));
        });
        _0x41a2c8[_0x3a0af3(0x184)] && _0x365598['fn'][_0x3a0af3(0x196)] && _0x41a2c8[_0x3a0af3(0x1b1)](function(_0xf793e1, _0x11aca0) {
            var _0x266b0c = _0x3a0af3
              , _0x3da2e9 = _0x365598(_0x11aca0)
              , _0x1cb783 = _0x3da2e9['closest'](_0x266b0c(0x18c));
            _0x1cb783[_0x266b0c(0x184)] ? _0x1cb783['on']('stretched.raffles.Section', function() {
                var _0x1373c0 = _0x266b0c;
                if (_0x3da2e9['data']('owl.carousel'))
                    return;
                _0x3da2e9['owlCarousel'](_0x1ea347[_0x1373c0(0x2a8)][_0x1373c0(0x2a6)]({
                    'margin': 0x0,
                    'loop': !![],
                    'autoplay': !![],
                    'nav': !![],
                    'dots': !![]
                }));
            }) : _0x3da2e9[_0x266b0c(0x196)](_0x1ea347[_0x266b0c(0x2a8)][_0x266b0c(0x2a6)]({
                'margin': 0x0,
                'loop': !![],
                'autoplay': !![],
                'nav': !![],
                'dots': !![]
            }));
        });
        this[_0x3a0af3(0x2a8)][_0x3a0af3(0x2a1)][_0x3a0af3(0x28e)](_0x3a0af3(0x30b), {
            'responsive': {
                0x0: {
                    'items': 0x2
                },
                0x1e0: {
                    'items': 0x3
                },
                0x4b0: {
                    'items': 0x6
                },
                0x514: {
                    'items': 0x6
                }
            }
        }),
        this[_0x3a0af3(0x2a8)]['gridOwl'][_0x3a0af3(0x28e)](_0x3a0af3(0x32b), {
            'margin': 0x10,
            'loop': !![]
        }),
        this[_0x3a0af3(0x2a8)]['gridOwl'][_0x3a0af3(0x28e)](_0x3a0af3(0x2e5), {
            'startPosition': 0x1,
            'margin': 0x60,
            'responsive': {
                0x0: {
                    'items': 0x1
                },
                0x1e0: {
                    'items': 0x1
                },
                0x3e0: {
                    'items': 0x1
                },
                0x4b0: {
                    'items': 0x1
                },
                0x514: {
                    'items': 0x1
                }
            }
        }),
        this[_0x3a0af3(0x2a8)][_0x3a0af3(0x2a1)][_0x3a0af3(0x28e)]('.raffles-testimonials\x20.raffles-grid--cols-2', {
            'startPosition': 0x1,
            'margin': 0x60,
            'responsive': {
                0x0: {
                    'items': 0x1
                },
                0x1e0: {
                    'items': 0x1
                },
                0x3e0: {
                    'items': 0x2
                },
                0x4b0: {
                    'items': 0x2
                },
                0x514: {
                    'items': 0x2
                }
            }
        }),
        this[_0x3a0af3(0x2a8)]['gridOwl'][_0x3a0af3(0x28e)](_0x3a0af3(0x1bb), {
            'startPosition': 0x1,
            'animateOut': 'fadeOut'
        }),
        this[_0x3a0af3(0x2a8)][_0x3a0af3(0x2a1)][_0x3a0af3(0x28e)](_0x3a0af3(0x30b), {
            'startPosition': 0x1,
            'responsive': {
                0x0: {
                    'items': 0x2
                },
                0x1e0: {
                    'items': 0x3
                },
                0x3e0: {
                    'items': 0x4
                },
                0x4b0: {
                    'items': 0x5
                },
                0x514: {
                    'items': 0x6
                }
            }
        }),
        this['helpers']['gridOwl'][_0x3a0af3(0x28e)](_0x3a0af3(0x30f), {
            'startPosition': 0x1,
            'center': !![],
            'loop': !![],
            'responsive': {
                0x0: {
                    'items': 0x1
                },
                0x1e0: {
                    'items': 0x1
                },
                0x3e0: {
                    'items': 0x1
                },
                0x400: {
                    'items': 0x2
                },
                0x514: {
                    'items': 0x2
                }
            }
        }),
        this[_0x3a0af3(0x2a8)]['gridOwl'][_0x3a0af3(0x28e)](_0x3a0af3(0x28d), {
            'center': !![],
            'responsive': {
                0x17c: {
                    'items': 0x1
                },
                0x1e0: {
                    'items': 0x1
                },
                0x4b0: {
                    'items': 0x1
                },
                0x514: {
                    'items': 0x2
                }
            }
        }),
        this[_0x3a0af3(0x2a8)][_0x3a0af3(0x2a1)]['extendConfigFor']('.raffles-owl-center-2', {
            'autoWidth': !![],
            'margin': 0x8,
            'responsive': {
                0x17c: {
                    'items': 0x1
                },
                0x1e0: {
                    'items': 0x3
                },
                0x4b0: {
                    'items': 0x3
                },
                0x514: {
                    'items': 0x3
                }
            }
        }),
        this[_0x3a0af3(0x2a8)][_0x3a0af3(0x2a1)][_0x3a0af3(0x28e)](_0x3a0af3(0x2aa), {
            'margin': 0x10,
            'loop': ![],
            'responsive': {
                0x17c: {
                    'items': 0x2
                },
                0x1e0: {
                    'items': 0x2
                },
                0x300: {
                    'items': 0x3
                },
                0x400: {
                    'items': 0x4
                },
                0x4b0: {
                    'items': 0x4
                },
                0x514: {
                    'items': 0x4
                }
            }
        }),
        this[_0x3a0af3(0x2a8)][_0x3a0af3(0x2a1)][_0x3a0af3(0x28e)]('.raffles-entities.type-3.raffles-grid--cols-3', {
            'responsive': {
                0x17c: {
                    'items': 0x1
                },
                0x1e0: {
                    'items': 0x1
                },
                0x334: {
                    'items': 0x2
                },
                0x4b0: {
                    'items': 0x2
                },
                0x514: {
                    'items': 0x2
                },
                0x5c8: {
                    'items': 0x3
                }
            }
        }),
        this[_0x3a0af3(0x2a8)][_0x3a0af3(0x2a1)][_0x3a0af3(0x28e)](_0x3a0af3(0x17b), {
            'responsive': {
                0x17c: {
                    'items': 0x1
                },
                0x1e0: {
                    'items': 0x1
                },
                0x334: {
                    'items': 0x2
                },
                0x4b0: {
                    'items': 0x2
                },
                0x514: {
                    'items': 0x2
                },
                0x5c8: {
                    'items': 0x3
                }
            }
        }),
        _0x365598(_0x3a0af3(0x2a2))['on'](_0x3a0af3(0x1a9), function(_0x6f40b7, _0x234089) {
            var _0x404aa9 = _0x3a0af3
              , _0x4406e2 = _0x234089[_0x404aa9(0x277)](_0x404aa9(0x327))
              , _0x2ad960 = _0x234089[_0x404aa9(0x277)]('.raffles-simple-slideshow-thumbs.owl-carousel');
            if (_0x4406e2[_0x404aa9(0x184)])
                _0x1ea347[_0x404aa9(0x2a8)][_0x404aa9(0x2a1)]['add'](_0x4406e2);
            _0x2ad960[_0x404aa9(0x184)] && _0x2ad960[_0x404aa9(0x196)](_0x1ea347[_0x404aa9(0x2a8)][_0x404aa9(0x2a6)]({
                'responsive': {
                    0x0: {
                        'items': 0x2
                    },
                    0x17c: {
                        'items': 0x3
                    },
                    0x3e0: {
                        'items': 0x4
                    },
                    0x4b0: {
                        'items': 0x6
                    }
                },
                'margin': 0xa,
                'loop': ![]
            }));
        });
        var _0x221e12 = _0x365598(_0x3a0af3(0x27b))[_0x3a0af3(0x29d)](function(_0x44cb23, _0x200ff9) {
            var _0x30e719 = _0x3a0af3;
            return !_0x365598(_0x200ff9)[_0x30e719(0x182)](_0x30e719(0x2a2))[_0x30e719(0x184)];
        });
        _0x221e12['length'] && _0x221e12[_0x3a0af3(0x196)](_0x1ea347[_0x3a0af3(0x2a8)][_0x3a0af3(0x2a6)]({
            'responsive': {
                0x0: {
                    'items': 0x2
                },
                0x17c: {
                    'items': 0x3
                },
                0x3e0: {
                    'items': 0x4
                },
                0x4b0: {
                    'items': 0x6
                }
            },
            'margin': 0xa,
            'dots': !![],
            'loop': ![]
        }));
        this['helpers'][_0x3a0af3(0x2a1)][_0x3a0af3(0x1c4)](_0x365598(_0x3a0af3(0x327))['filter'](function(_0x47f8ca, _0x3e71a8) {
            var _0x1ab7eb = _0x3a0af3;
            return !_0x365598(_0x3e71a8)[_0x1ab7eb(0x182)](_0x1ab7eb(0x2a2))[_0x1ab7eb(0x184)];
        })),
        this['helpers']['owlSync'][_0x3a0af3(0x240)]();
        var _0x367ea4 = _0x365598(_0x3a0af3(0x26c)), _0x83e9a7;
        _0x367ea4[_0x3a0af3(0x184)] && (_0x83e9a7 = _0x367ea4[_0x3a0af3(0x277)]('.raffles-rating'),
        _0x83e9a7[_0x3a0af3(0x184)] && _0x83e9a7['on'](_0x3a0af3(0x308), function(_0x4bfc04, _0x270470) {
            var _0x2549fd = _0x3a0af3, _0x530114 = _0x270470[_0x2549fd(0x182)](_0x2549fd(0x2ab)), _0x504783;
            if (_0x530114[_0x2549fd(0x184)]) {
                _0x504783 = _0x530114['data'](_0x2549fd(0x218));
                if (_0x504783)
                    _0x504783[_0x2549fd(0x2d7)]();
            }
        }));
        if (this[_0x3a0af3(0x2a8)][_0x3a0af3(0x323)])
            this[_0x3a0af3(0x2a8)]['rating'](_0x365598(_0x3a0af3(0x2b1)), {
                'topLevelElements': _0x3a0af3(0x269),
                'bottomLevelElements': _0x3a0af3(0x139)
            });
        if (this[_0x3a0af3(0x2a8)]['rating'])
            this[_0x3a0af3(0x2a8)][_0x3a0af3(0x323)](_0x365598(_0x3a0af3(0x177)), {
                'topLevelElements': _0x3a0af3(0x269),
                'bottomLevelElements': '<i\x20class=\x22material-icons\x22>star_border</i>'
            });
        if (this[_0x3a0af3(0x2a8)][_0x3a0af3(0x127)])
            this[_0x3a0af3(0x2a8)]['ratingField'](_0x365598('.raffles-rating-field'));
        _0x281b33[_0x3a0af3(0x17a)]();
    }
    ,
    _0x439f83[_0x2c0ea6(0x2fc)] = function() {
        var _0x18a27d = _0x2c0ea6
          , _0x365bfa = this;
        if (this['ISLEGACYBROWSER'])
            return;
        var _0x2afa66 = _0x365598('.raffles-section');
        if (this[_0x18a27d(0x2a8)][_0x18a27d(0x123)])
            this[_0x18a27d(0x2a8)][_0x18a27d(0x123)][_0x18a27d(0x240)](_0x365598('[class*=\x22raffles-colorizer--scheme-\x22]'));
        this['modules'][_0x18a27d(0x26d)] && _0x2afa66[_0x18a27d(0x184)] && this[_0x18a27d(0x1e1)][_0x18a27d(0x26d)][_0x18a27d(0x240)](_0x2afa66);
        if (this['helpers'][_0x18a27d(0x1d0)])
            this['helpers'][_0x18a27d(0x1d0)]['init'](_0x365598(_0x18a27d(0x12e)));
        if (this[_0x18a27d(0x2a8)][_0x18a27d(0x24b)])
            this[_0x18a27d(0x2a8)][_0x18a27d(0x24b)][_0x18a27d(0x240)]({
                'except': _0x365598('#raffles-header:not(.raffles-header--transparent)')['add'](_0x365598('#raffles-footer'))
            });
        var _0xc68fa2 = _0x365598('.raffles-tabs');
        if (_0xc68fa2['length']) {
            _0xc68fa2[_0x18a27d(0x172)]({
                'speed': _0x365bfa[_0x18a27d(0x1b2)],
                'easing': _0x365bfa['ANIMATIONEASING'],
                'cssPrefix': _0x18a27d(0x2f2)
            }),
            _0x365598(_0x18a27d(0x215))['on'](_0x18a27d(0x2e8), function() {
                var _0x564ede = _0x18a27d;
                _0x365598('.owl-carousel')[_0x564ede(0x170)]('refresh.owl.carousel'),
                _0x365598('.inner-container')['css']({
                    'height': _0x365598(_0x564ede(0x19f))['height']() + 'px'
                });
            });
            var _0x2e69ad = _0x365598('.raffles-tabs')[_0x18a27d(0x2b9)](_0x18a27d(0x218));
            _0x365598(_0x18a27d(0x163))['on'](_0x18a27d(0x2e8), function() {
                setTimeout(function() {
                    var _0xe500b6 = _0x5144;
                    _0x2e69ad[_0xe500b6(0x2d7)]();
                }, 0x12c);
            });
        }
        var _0x3d9ada = _0x365598(_0x18a27d(0x1f4));
        _0x3d9ada[_0x18a27d(0x184)] && _0x3d9ada['tabs']({
            'active': 0x0,
            'beforeActivate': function(_0x1b92af, _0x49b77f) {
                var _0x4f2ceb = _0x18a27d
                  , _0xd1b4ec = _0x49b77f[_0x4f2ceb(0x194)][_0x4f2ceb(0x277)](_0x4f2ceb(0x237))[_0x4f2ceb(0x23e)](_0x4f2ceb(0x2fb));
            },
            'hide': {
                'effect': _0x18a27d(0x248),
                'duration': 0x1c2
            },
            'show': {
                'effect': _0x18a27d(0x1a2),
                'duration': 0x1c2
            },
            'updateHash': ![]
        });
        if (this[_0x18a27d(0x1e1)]['preloader'])
            this[_0x18a27d(0x1e1)][_0x18a27d(0x1dc)]();
        var _0x56e490 = _0x365598(_0x18a27d(0x310));
        _0x56e490[_0x18a27d(0x184)] && _0x56e490['parallax']('50%', 0.4);
    }
    ,
    _0x439f83['modules'][_0x2c0ea6(0x142)] = function(_0x2d9774) {
        var _0x565a2c = _0x2c0ea6
          , _0x32a0b2 = {
            'init': function(_0x27ce76) {
                var _0x5ca2e6 = _0x5144
                  , _0x142a77 = this;
                if (_0x27ce76)
                    this[_0x5ca2e6(0x15c)] = _0x365598[_0x5ca2e6(0x32e)](this[_0x5ca2e6(0x15c)], _0x27ce76);
                this['btn'] = _0x365598(_0x5ca2e6(0x2c7), {
                    'class': _0x142a77[_0x5ca2e6(0x15c)][_0x5ca2e6(0x13e)] + _0x5ca2e6(0x275),
                    'html': _0x5ca2e6(0x286)
                }),
                this[_0x5ca2e6(0x147)](),
                _0x476ef7[_0x5ca2e6(0x236)](this[_0x5ca2e6(0x1f1)]);
            },
            'config': {
                'breakpoint': 0x2bc,
                'showClass': _0x565a2c(0x2ba),
                'hideClass': _0x565a2c(0x1f8),
                'easing': _0x565a2c(0x21f),
                'speed': 0x1f4,
                'cssPrefix': ''
            },
            'bindEvents': function() {
                var _0x5d8e57 = _0x565a2c
                  , _0x4dc19f = _0x365598(_0x5d8e57(0x214))
                  , _0x37ae84 = this;
                this[_0x5d8e57(0x1f1)]['on'](_0x5d8e57(0x2e8), function(_0x775cb0) {
                    var _0x5d285e = _0x5d8e57;
                    _0x4dc19f['stop']()[_0x5d285e(0x20c)]({
                        'scrollTop': 0x0
                    }, {
                        'easing': _0x37ae84[_0x5d285e(0x15c)][_0x5d285e(0x2c4)],
                        'duration': _0x37ae84[_0x5d285e(0x15c)][_0x5d285e(0x27e)]
                    });
                }),
                this[_0x5d8e57(0x1f1)]['on'](_0x439f83[_0x5d8e57(0x2bd)], function(_0x66e9fc) {
                    var _0x1a7632 = _0x5d8e57;
                    _0x66e9fc[_0x1a7632(0x2fa)]();
                    var _0x5b0663 = _0x365598(this);
                    _0x5b0663[_0x1a7632(0x2f9)](_0x37ae84[_0x1a7632(0x15c)][_0x1a7632(0x2f4)]) && _0x5b0663['addClass'](_0x1a7632(0x158))['removeClass'](_0x37ae84['config'][_0x1a7632(0x2f4)] + '\x20' + _0x37ae84[_0x1a7632(0x15c)][_0x1a7632(0x13e)] + _0x1a7632(0x22c));
                }),
                _0x365598(window)['on']('scroll.backtotop', {
                    'self': this
                }, this[_0x5d8e57(0x22a)]);
            },
            'toggleBtn': function(_0x37c5bf) {
                var _0xb8ce6d = _0x565a2c
                  , _0x368511 = _0x365598(this)
                  , _0x1fc0e6 = _0x37c5bf[_0xb8ce6d(0x2b9)]['self'];
                if (_0x368511[_0xb8ce6d(0x135)]() > _0x1fc0e6['config'][_0xb8ce6d(0x201)] && !_0x1fc0e6[_0xb8ce6d(0x1f1)][_0xb8ce6d(0x2f9)](_0x1fc0e6['config'][_0xb8ce6d(0x13e)] + _0xb8ce6d(0x22c)))
                    _0x1fc0e6['btn'][_0xb8ce6d(0x1d5)](_0x1fc0e6[_0xb8ce6d(0x15c)]['cssPrefix'] + _0xb8ce6d(0x22c))[_0xb8ce6d(0x22d)](_0xb8ce6d(0x158)),
                    _0x439f83['ANIMATIONSUPPORTED'] && _0x1fc0e6[_0xb8ce6d(0x1f1)][_0xb8ce6d(0x1d5)](_0x1fc0e6[_0xb8ce6d(0x15c)][_0xb8ce6d(0x192)]);
                else
                    _0x368511[_0xb8ce6d(0x135)]() < _0x1fc0e6[_0xb8ce6d(0x15c)]['breakpoint'] && _0x1fc0e6[_0xb8ce6d(0x1f1)][_0xb8ce6d(0x2f9)](_0x1fc0e6[_0xb8ce6d(0x15c)][_0xb8ce6d(0x13e)] + 'inview') && (_0x1fc0e6[_0xb8ce6d(0x1f1)]['removeClass'](_0x1fc0e6[_0xb8ce6d(0x15c)][_0xb8ce6d(0x13e)] + _0xb8ce6d(0x22c)),
                    !_0x439f83[_0xb8ce6d(0x1ed)] ? _0x1fc0e6['btn']['addClass'](_0xb8ce6d(0x158)) : _0x1fc0e6['btn'][_0xb8ce6d(0x22d)](_0x1fc0e6[_0xb8ce6d(0x15c)][_0xb8ce6d(0x192)])[_0xb8ce6d(0x1d5)](_0x1fc0e6[_0xb8ce6d(0x15c)]['hideClass']));
            }
        };
        return _0x32a0b2[_0x565a2c(0x240)](_0x2d9774),
        this;
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x1dc)] = function() {
        var _0x5df666 = _0x2c0ea6
          , _0x5ebf0c = _0x365598('.raffles-preloader')
          , _0x14ee3f = parseInt(_0x5ebf0c[_0x5df666(0x151)](_0x5df666(0x175)), 0xa)
          , _0x606b0a = parseInt(_0x5ebf0c[_0x5df666(0x151)](_0x5df666(0x16d)), 0xa)
          , _0x402764 = _0x365598(window)
          , _0x52424b = _0x365598('.raffles-navigation,\x20.raffles-navigation-vertical');
        _0x52424b[_0x5df666(0x184)] && _0x52424b[_0x5df666(0x156)](_0x5df666(0x1ea))['on'](_0x5df666(0x1ea), 'a', function(_0x3de71c) {
            var _0x484511 = _0x5df666
              , _0x4923aa = _0x365598(this)
              , _0x599107 = _0x365598(_0x484511(0x168), {
                'style': _0x484511(0x239) + _0x3de71c['clientX'] + 'px;\x20top:\x20' + _0x3de71c['clientY'] + 'px;',
                'class': _0x484511(0x2d4)
            });
            _0x476ef7[_0x484511(0x2f9)]('raffles-body--moving-to-another-page') && (_0x599107[_0x484511(0x245)](_0x476ef7),
            setTimeout(function() {
                var _0x162c5b = _0x484511;
                _0x599107[_0x162c5b(0x1d5)]('raffles-preloader-circle--appearing');
            }, 0x14));
        });
        if (!_0x5ebf0c['length'])
            return;
        _0x476ef7[_0x5df666(0x156)]('mousemove.rafflesPreloader')['on']('mousemove.rafflesPreloader', function(_0x2f5d85) {
            var _0x4e9b9c = _0x5df666;
            _0x5ebf0c['css']({
                'margin-left': _0x14ee3f - (_0x402764[_0x4e9b9c(0x26b)]() / 0x2 - _0x2f5d85[_0x4e9b9c(0x180)]),
                'margin-top': _0x606b0a - (_0x402764['height']() / 0x2 - (_0x2f5d85['pageY'] - _0x402764['scrollTop']()))
            });
        })['jQueryImagesLoaded']()[_0x5df666(0x284)](function() {
            var _0x49b8bc = _0x5df666;
            _0x5ebf0c[_0x49b8bc(0x1d5)](_0x49b8bc(0x1c8)),
            setTimeout(function() {
                var _0x23c5c1 = _0x49b8bc;
                _0x5ebf0c[_0x23c5c1(0x16a)](),
                _0x476ef7[_0x23c5c1(0x156)]('mousemove.rafflesPreloader');
            }, 0x2bc),
            window[_0x49b8bc(0x133)][_0x49b8bc(0x1c2)] == _0x49b8bc(0x23a) && _0x365598('html,\x20body')[_0x49b8bc(0x2e3)]()['animate']({
                'scrollTop': _0x3960ea['height']()
            }, {
                'duration': self[_0x49b8bc(0x1b2)],
                'easing': self[_0x49b8bc(0x321)]
            });
        });
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x208)] = {},
    _0x439f83[_0x2c0ea6(0x1e1)]['dropdown'][_0x2c0ea6(0x15c)] = {
        'uncloseable': '.raffles-dropdown,\x20.select2-container--raffles',
        'cssPrefix': _0x2c0ea6(0x2f2),
        'availableError': 0x1e,
        'rtl': _0x439f83['RTL'],
        'classMap': {
            'active': _0x2c0ea6(0x1da),
            'container': _0x2c0ea6(0x208),
            'title': _0x2c0ea6(0x2e0),
            'element': _0x2c0ea6(0x13f),
            'leftPlaced': 'dropdown-element--x-left',
            'rightPlaced': _0x2c0ea6(0x266),
            'topPlaced': _0x2c0ea6(0x28c)
        }
    },
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x208)][_0x2c0ea6(0x240)] = function(_0xf1a3f8) {
        var _0x2a2458 = _0x2c0ea6;
        if (this[_0x2a2458(0x1ef)])
            return;
        if (_0x365598[_0x2a2458(0x16f)](_0xf1a3f8))
            _0x365598['extend'](!![], this[_0x2a2458(0x15c)], _0xf1a3f8);
        Object[_0x2a2458(0x13a)](this, {
            'activeClass': {
                'get': function() {
                    var _0x22c86e = _0x2a2458;
                    return this[_0x22c86e(0x15c)][_0x22c86e(0x13e)] + this[_0x22c86e(0x15c)]['classMap']['active'];
                }
            },
            'containerClass': {
                'get': function() {
                    var _0x6de6e0 = _0x2a2458;
                    return this['config'][_0x6de6e0(0x13e)] + this['config'][_0x6de6e0(0x2b7)][_0x6de6e0(0x149)];
                }
            },
            'titleClass': {
                'get': function() {
                    var _0x44383a = _0x2a2458;
                    return this[_0x44383a(0x15c)][_0x44383a(0x13e)] + this[_0x44383a(0x15c)]['classMap'][_0x44383a(0x300)];
                }
            },
            'elementClass': {
                'get': function() {
                    var _0x3af4fa = _0x2a2458;
                    return this['config'][_0x3af4fa(0x13e)] + this['config'][_0x3af4fa(0x2b7)]['element'];
                }
            },
            'rightPlacedClass': {
                'get': function() {
                    var _0x3de50a = _0x2a2458;
                    return this[_0x3de50a(0x15c)][_0x3de50a(0x13e)] + this[_0x3de50a(0x15c)][_0x3de50a(0x2b7)][_0x3de50a(0x26a)];
                }
            },
            'leftPlacedClass': {
                'get': function() {
                    var _0x23e44e = _0x2a2458;
                    return this['config'][_0x23e44e(0x13e)] + this['config']['classMap'][_0x23e44e(0x225)];
                }
            },
            'topPlacedClass': {
                'get': function() {
                    var _0x4ad643 = _0x2a2458;
                    return this[_0x4ad643(0x15c)][_0x4ad643(0x13e)] + this[_0x4ad643(0x15c)][_0x4ad643(0x2b7)]['topPlaced'];
                }
            },
            '$dropdowns': {
                'get': function() {
                    var _0x2ec403 = _0x2a2458;
                    return _0x365598('.' + this[_0x2ec403(0x207)]);
                }
            }
        }),
        this['_bindEvents']();
    }
    ,
    _0x439f83['modules']['dropdown'][_0x2c0ea6(0x2cd)] = function() {
        var _0x450cf8 = _0x2c0ea6
          , _0x2c4413 = this;
        _0x3960ea[_0x450cf8(0x156)](_0x450cf8(0x193))['on'](_0x450cf8(0x193), function(_0x31b953) {
            var _0x1d8926 = _0x450cf8
              , _0xdd61df = _0x365598(_0x31b953['target']);
            !_0xdd61df[_0x1d8926(0x182)](_0x2c4413[_0x1d8926(0x15c)][_0x1d8926(0x185)])[_0x1d8926(0x184)] && _0x2c4413[_0x1d8926(0x18f)](_0x2c4413[_0x1d8926(0x24e)]);
        })['on'](_0x450cf8(0x27a), function(_0x561ed8) {
            var _0xc4ee2a = _0x450cf8;
            _0x561ed8[_0xc4ee2a(0x27c)] && _0x561ed8[_0xc4ee2a(0x27c)] == 0x1b && _0x2c4413['close'](_0x2c4413['$dropdowns']);
        }),
        _0x476ef7[_0x450cf8(0x156)](_0x450cf8(0x193))['on']('click.rafflesDropdown', '.' + _0x2c4413[_0x450cf8(0x1ae)], function(_0x3fc8a6) {
            var _0x14741a = _0x450cf8
              , _0x4b50f3 = _0x365598(this)[_0x14741a(0x182)]('.' + _0x2c4413['containerClass'])
              , _0x2d85cf = _0x2c4413[_0x14741a(0x24e)][_0x14741a(0x20b)](_0x4b50f3);
            _0x4b50f3['length'] && (_0x2c4413[_0x14741a(0x1ba)](_0x4b50f3),
            _0x3fc8a6[_0x14741a(0x2fa)]()),
            _0x2c4413[_0x14741a(0x18f)](_0x2d85cf);
        }),
        this[_0x450cf8(0x1ef)] = !![];
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)]['dropdown'][_0x2c0ea6(0x18f)] = function(_0x75082d) {
        var _0x3b04be = _0x2c0ea6;
        if (!_0x365598['isjQuery'](_0x75082d, !![]))
            return;
        _0x75082d[_0x3b04be(0x22d)](this[_0x3b04be(0x2b2)])[_0x3b04be(0x277)]('.' + this[_0x3b04be(0x1c3)])[_0x3b04be(0x23e)](_0x3b04be(0x258), _0x3b04be(0x14f))[_0x3b04be(0x1e0)]()['find']('.' + this['titleClass'])[_0x3b04be(0x23e)](_0x3b04be(0x229), _0x3b04be(0x287));
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x208)][_0x2c0ea6(0x280)] = function(_0xf4718c) {
        var _0x503943 = _0x2c0ea6;
        if (!_0x365598[_0x503943(0x2a5)](_0xf4718c, !![]))
            return;
        this[_0x503943(0x281)](_0xf4718c),
        _0xf4718c[_0x503943(0x1d5)](this[_0x503943(0x2b2)])['find']('.' + this[_0x503943(0x1c3)])[_0x503943(0x23e)](_0x503943(0x258), _0x503943(0x287))[_0x503943(0x1e0)]()[_0x503943(0x277)]('.' + this['titleClass'])[_0x503943(0x23e)](_0x503943(0x229), _0x503943(0x14f));
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x208)][_0x2c0ea6(0x281)] = function(_0x1c9796) {
        var _0x1595ad = _0x2c0ea6
          , _0x2c5a8b = this
          , _0x326c28 = _0x365598(window);
        if (!_0x365598[_0x1595ad(0x2a5)](_0x1c9796, !![]))
            return;
        return _0x1c9796[_0x1595ad(0x1b1)](function(_0x27fe60, _0x599e73) {
            var _0x4bb6db = _0x1595ad, _0x21339a = _0x365598(_0x599e73), _0x176643 = _0x21339a[_0x4bb6db(0x277)]('.' + _0x2c5a8b[_0x4bb6db(0x1c3)]), _0x4f84ec;
            _0x176643[_0x4bb6db(0x22d)](_0x2c5a8b[_0x4bb6db(0x1a1)])[_0x4bb6db(0x22d)](_0x2c5a8b[_0x4bb6db(0x1e4)])[_0x4bb6db(0x22d)](_0x2c5a8b['topPlacedClass']),
            _0x4f84ec = _0x176643['offset']();
            if (_0x4f84ec['left'] - _0x2c5a8b[_0x4bb6db(0x15c)][_0x4bb6db(0x2f1)] < 0x0)
                _0x176643['addClass'](_0x2c5a8b[_0x4bb6db(0x1a1)]);
            else
                _0x4f84ec['left'] + _0x176643[_0x4bb6db(0x25d)]() + _0x2c5a8b[_0x4bb6db(0x15c)][_0x4bb6db(0x2f1)] > _0x326c28[_0x4bb6db(0x26b)]() && _0x176643[_0x4bb6db(0x1d5)](_0x2c5a8b[_0x4bb6db(0x1e4)]);
            _0x4f84ec[_0x4bb6db(0x162)] + _0x176643['outerHeight']() + _0x2c5a8b[_0x4bb6db(0x15c)]['availableError'] > _0x326c28[_0x4bb6db(0x135)]() + _0x326c28[_0x4bb6db(0x1d1)]() && _0x176643[_0x4bb6db(0x1d5)](_0x2c5a8b[_0x4bb6db(0x18d)]);
        });
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x208)][_0x2c0ea6(0x1ba)] = function(_0x3cb610) {
        var _0x47a583 = _0x2c0ea6;
        if (!_0x365598[_0x47a583(0x2a5)](_0x3cb610, !![]))
            return;
        var _0x4e3877 = this;
        return _0x3cb610[_0x47a583(0x1b1)](function(_0x41cb3e, _0x22e968) {
            var _0x115039 = _0x47a583
              , _0x319dc3 = _0x365598(_0x22e968);
            if (_0x319dc3[_0x115039(0x2f9)](_0x4e3877[_0x115039(0x2b2)]))
                _0x4e3877['close'](_0x319dc3);
            else
                _0x4e3877[_0x115039(0x280)](_0x319dc3);
        });
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x128)] = {
        '_config': {
            'type': _0x2c0ea6(0x27f),
            'closeOnOverlayClick': !![],
            'overlay': {
                'css': {
                    'backgroundColor': _0x2c0ea6(0x2d8)
                }
            },
            'clickableElements': null
        },
        '_collection': _0x365598(),
        'init': function(_0x152dd6, _0x4039e4) {
            var _0x5e2090 = _0x2c0ea6;
            if (!_0x152dd6 || !_0x152dd6[_0x5e2090(0x184)])
                return;
            _0x4039e4 = _0x365598[_0x5e2090(0x16f)](_0x4039e4) ? _0x365598[_0x5e2090(0x32e)](!![], {}, this[_0x5e2090(0x20f)], _0x4039e4) : this[_0x5e2090(0x20f)],
            _0x4039e4 = this['_prepareCallbacks'](_0x4039e4),
            _0x4039e4 && _0x4039e4[_0x5e2090(0x265)] && _0x476ef7['on'](_0x5e2090(0x176), _0x5e2090(0x1bf), function(_0x34d364) {
                var _0x591954 = _0x5e2090
                  , _0x290de7 = _0x365598(_0x34d364[_0x591954(0x136)]);
                !_0x290de7['closest'](_0x4039e4[_0x591954(0x265)])[_0x591954(0x184)] && _0x365598[_0x591954(0x130)]('close');
            }),
            _0x152dd6['on'](_0x5e2090(0x176), function(_0x540f7e) {
                var _0x331917 = _0x5e2090
                  , _0x1d1f37 = _0x365598(this);
                if (_0x1d1f37[_0x331917(0x2b9)](_0x331917(0x32c)) == _0x331917(0x2ac)) {
                    if (!_0x1d1f37[_0x331917(0x2b9)](_0x331917(0x312)))
                        return;
                    _0x365598[_0x331917(0x130)](_0x365598[_0x331917(0x32e)](!![], {}, _0x4039e4, {
                        'type': _0x331917(0x2ac),
                        'url': rafflesAJAXData[_0x331917(0x316)],
                        'ajax': {
                            'cache': ![],
                            'dataType': _0x331917(0x27f),
                            'data': {
                                'action': _0x1d1f37[_0x331917(0x2b9)](_0x331917(0x312)),
                                'data': _0x1d1f37[_0x331917(0x2b9)](_0x331917(0x2b6)),
                                'AJAX_token': rafflesAJAXData['AJAX_token']
                            },
                            'success': function(_0x1275a8, _0x318dfc, _0x2bc7ce) {
                                var _0x594ceb = _0x331917;
                                _0x1275a8[_0x594ceb(0x1d2)][_0x594ceb(0x27f)](_0x2bc7ce);
                            }
                        }
                    }));
                } else
                    _0x365598(_0x1d1f37[_0x331917(0x2b9)](_0x331917(0x2ad)))[_0x331917(0x130)](_0x4039e4);
                _0x540f7e[_0x331917(0x2fa)]();
            });
        },
        '_prepareCallbacks': function(_0x1b10ee) {
            var _0x7680fd = _0x2c0ea6
              , _0x1c569f = _0x1b10ee[_0x7680fd(0x2bf)] || function() {}
              , _0x500f08 = _0x1b10ee[_0x7680fd(0x253)] || function() {}
              , _0x582283 = _0x1b10ee[_0x7680fd(0x272)] || function() {}
              , _0x183177 = _0x1b10ee['afterClose'] || function() {}
            ;
            return _0x1b10ee[_0x7680fd(0x2bf)] = function() {
                var _0x2cabe8 = _0x7680fd;
                _0x1c569f[_0x2cabe8(0x14d)](this, Array[_0x2cabe8(0x171)][_0x2cabe8(0x1d6)](arguments, 0x0));
            }
            ,
            _0x1b10ee[_0x7680fd(0x253)] = function(_0x5858a7) {
                var _0x238f49 = _0x7680fd;
                _0x500f08[_0x238f49(0x14d)](this, Array[_0x238f49(0x171)][_0x238f49(0x1d6)](arguments, 0x0));
            }
            ,
            _0x1b10ee[_0x7680fd(0x1af)] = function(_0x41d23c) {
                var _0x142195 = _0x7680fd;
                _0x476ef7[_0x142195(0x151)](_0x142195(0x29f), ''),
                _0x183177[_0x142195(0x14d)](this, Array[_0x142195(0x171)][_0x142195(0x1d6)](arguments, 0x0));
            }
            ,
            _0x1b10ee;
        }
    },
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x22f)] = function(_0x4c94ec) {
        var _0x213731 = _0x2c0ea6;
        if (!(_0x213731(0x134)in window))
            return;
        var _0x1f8077 = {
            'target': _0x476ef7[_0x213731(0x328)]()[_0x213731(0x21c)](),
            'type': _0x213731(0x20a),
            'timeout': 0xfa0
        };
        _0x1f8077 = _0x4c94ec && _0x365598[_0x213731(0x16f)](_0x4c94ec) ? _0x365598[_0x213731(0x32e)](!![], {}, _0x1f8077, _0x4c94ec) : _0x1f8077;
        var _0x4caada = _0x213731(0x15b)
          , _0x24141b = _0x365598(Handlebars[_0x213731(0x296)](_0x4caada)(_0x1f8077));
        _0x24141b[_0x213731(0x2b9)](_0x213731(0x1fa), setTimeout(function() {
            var _0x31b90b = _0x213731;
            _0x24141b[_0x31b90b(0x2e3)]()['slideUp']({
                'duration': 0x15e,
                'easing': 'linear',
                'complete': function() {
                    _0x365598(this)['remove']();
                }
            });
        }, _0x1f8077[_0x213731(0x211)]))[_0x213731(0x216)](_0x1f8077[_0x213731(0x136)])['stop']()[_0x213731(0x1e2)]({
            'duration': 0x15e,
            'easing': _0x213731(0x21f)
        });
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x26d)] = {},
    _0x439f83['modules'][_0x2c0ea6(0x26d)]['_$collection'] = _0x365598(),
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x26d)][_0x2c0ea6(0x15c)] = {
        'cssPrefix': _0x2c0ea6(0x2f2),
        'resizeDelay': 0xa,
        'boddyPaddings': ![],
        'classMap': {
            'loading': 'section--loading',
            'stretched': _0x2c0ea6(0x20e),
            'stretchedContent': 'section--stretched-content',
            'stretchedContentNoPadding': 'section--stretched-content-no-px',
            'bgColorElementClass': 'colorizer-bg-color',
            'bgImageElementClass': _0x2c0ea6(0x13d)
        }
    },
    Object[_0x2c0ea6(0x13a)](_0x439f83['modules']['Section'], {
        'bgColorElementClass': {
            'get': function() {
                var _0x23efb4 = _0x2c0ea6;
                return this['config']['cssPrefix'] + this[_0x23efb4(0x15c)][_0x23efb4(0x2b7)][_0x23efb4(0x244)];
            }
        },
        'bgImageElementClass': {
            'get': function() {
                var _0x5dd0d6 = _0x2c0ea6;
                return this['config'][_0x5dd0d6(0x13e)] + this[_0x5dd0d6(0x15c)][_0x5dd0d6(0x2b7)]['bgImageElementClass'];
            }
        },
        'stretchedClass': {
            'get': function() {
                var _0x3f5a21 = _0x2c0ea6;
                return this['config'][_0x3f5a21(0x13e)] + this[_0x3f5a21(0x15c)][_0x3f5a21(0x2b7)][_0x3f5a21(0x326)];
            }
        },
        'stretchedContentClass': {
            'get': function() {
                var _0x538589 = _0x2c0ea6;
                return this[_0x538589(0x15c)][_0x538589(0x13e)] + this[_0x538589(0x15c)][_0x538589(0x2b7)][_0x538589(0x2e6)];
            }
        },
        'stretchedContentNoPaddingClass': {
            'get': function() {
                var _0x16328f = _0x2c0ea6;
                return this[_0x16328f(0x15c)][_0x16328f(0x13e)] + this['config']['classMap'][_0x16328f(0x2dd)];
            }
        },
        'loadingClass': {
            'get': function() {
                var _0x152d91 = _0x2c0ea6;
                return this[_0x152d91(0x15c)][_0x152d91(0x13e)] + this[_0x152d91(0x15c)][_0x152d91(0x2b7)][_0x152d91(0x19a)];
            }
        }
    }),
    _0x439f83[_0x2c0ea6(0x1e1)]['Section']['changeConfig'] = function(_0x1768a5) {
        var _0x2fe7c5 = _0x2c0ea6;
        return _0x365598[_0x2fe7c5(0x32e)](!![], this['config'], _0x1768a5);
    }
    ,
    _0x439f83['modules'][_0x2c0ea6(0x26d)][_0x2c0ea6(0x240)] = function(_0x378d04) {
        var _0x307ff5 = _0x2c0ea6
          , _0x4a263a = this;
        if (!_0x365598[_0x307ff5(0x2a5)](_0x378d04, !![]))
            return;
        if (!this['_bindedGlobalEvents'])
            this['_bindGlobalEvents']();
        return _0x378d04[_0x307ff5(0x1b1)](function(_0x5db5f0, _0x11c6f0) {
            var _0x275702 = _0x307ff5
              , _0x39bcf9 = _0x365598(_0x11c6f0);
            if (_0x4a263a[_0x275702(0x288)]['filter'](_0x39bcf9)[_0x275702(0x184)])
                return;
            _0x4a263a[_0x275702(0x21d)](_0x39bcf9),
            _0x4a263a[_0x275702(0x288)] = _0x4a263a[_0x275702(0x288)][_0x275702(0x1c4)](_0x39bcf9);
        });
    }
    ,
    _0x439f83['modules']['Section']['_bindGlobalEvents'] = function() {
        var _0x3a597f = this;
        _0x365598(window)['on']('resize.App.modules.Section', function() {
            var _0x22be78 = _0x5144;
            if (_0x3a597f['_resizeTimeOutId'])
                clearTimeout(_0x3a597f[_0x22be78(0x30a)]);
            _0x3a597f[_0x22be78(0x30a)] = setTimeout(function() {
                var _0x5f1c45 = _0x22be78;
                _0x3a597f[_0x5f1c45(0x209)]();
            }, _0x3a597f['config'][_0x22be78(0x254)]);
        });
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)]['Section'][_0x2c0ea6(0x209)] = function() {
        var _0x870d05 = _0x2c0ea6
          , _0x436c06 = this;
        return this[_0x870d05(0x288)][_0x870d05(0x1b1)](function(_0x1dad0, _0x18bed3) {
            var _0x5151df = _0x870d05
              , _0x2f17c7 = _0x365598(_0x18bed3);
            _0x436c06[_0x5151df(0x14a)](_0x2f17c7)[_0x5151df(0x21d)](_0x2f17c7);
        });
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x26d)][_0x2c0ea6(0x14a)] = function(_0x329eb0) {
        var _0x50dfd0 = _0x2c0ea6;
        if (!_0x365598[_0x50dfd0(0x2a5)](_0x329eb0, !![]))
            return;
        return _0x329eb0['css']({
            'margin-left': '',
            'margin-right': ''
        }),
        this;
    }
    ,
    _0x439f83['modules'][_0x2c0ea6(0x26d)][_0x2c0ea6(0x21d)] = function(_0x144c19) {
        var _0x48bfc0 = _0x2c0ea6;
        if (!_0x365598['isjQuery'](_0x144c19, !![]))
            return;
        if (_0x144c19['hasClass'](this['stretchedClass']))
            this['stretch'](_0x144c19);
        else
            (_0x144c19['hasClass'](this[_0x48bfc0(0x1e7)]) || _0x144c19['hasClass'](this['stretchedContentNoPaddingClass'])) && this['stretchContent'](_0x144c19);
        return this;
    }
    ,
    _0x439f83['modules'][_0x2c0ea6(0x26d)][_0x2c0ea6(0x1f5)] = function() {
        var _0x4a20e1 = _0x2c0ea6;
        return {
            'padding-left': parseInt(_0x476ef7['css']('padding-left'), 0xa),
            'padding-right': parseInt(_0x476ef7[_0x4a20e1(0x151)](_0x4a20e1(0x279)), 0xa)
        };
    }
    ,
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x26d)]['stretch'] = function(_0x40307b) {
        var _0x2914f1 = _0x2c0ea6, _0x5056b8, _0x4ca365, _0x312641;
        if (!_0x365598[_0x2914f1(0x2a5)](_0x40307b, !![]))
            return;
        _0x5056b8 = _0x40307b['find']('.' + this[_0x2914f1(0x244)] + ',\x20.' + this[_0x2914f1(0x30c)]);
        if (!_0x5056b8[_0x2914f1(0x184)])
            return;
        return _0x4ca365 = _0x40307b[_0x2914f1(0x153)]()[_0x2914f1(0x319)],
        _0x312641 = this[_0x2914f1(0x1f5)](),
        _0x4ca365 > 0x0 && _0x5056b8[_0x2914f1(0x151)]({
            'left': (_0x4ca365 - _0x312641[_0x2914f1(0x31d)]) / -0x1,
            'right': (_0x4ca365 - _0x312641[_0x2914f1(0x279)]) / -0x1
        }),
        _0x40307b[_0x2914f1(0x22d)](this[_0x2914f1(0x322)])[_0x2914f1(0x170)](_0x2914f1(0x1a9), [_0x40307b]),
        _0x40307b;
    }
    ,
    _0x439f83['modules'][_0x2c0ea6(0x26d)]['stretchContent'] = function(_0x32fe5a) {
        var _0x47215f = _0x2c0ea6, _0x174e1b, _0x2a44ee;
        if (!_0x365598[_0x47215f(0x2a5)](_0x32fe5a) || !_0x32fe5a[_0x47215f(0x184)])
            return;
        return _0x174e1b = _0x32fe5a[_0x47215f(0x153)]()[_0x47215f(0x319)],
        _0x2a44ee = this[_0x47215f(0x1f5)](),
        _0x174e1b > 0x0 && _0x32fe5a['css']({
            'margin-left': (_0x174e1b - _0x2a44ee['padding-left']) / -0x1,
            'margin-right': (_0x174e1b - _0x2a44ee[_0x47215f(0x279)]) / -0x1
        }),
        _0x32fe5a[_0x47215f(0x22d)](this['loadingClass'])['trigger'](_0x47215f(0x1a9), [_0x32fe5a]),
        _0x32fe5a;
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x123)] = {},
    _0x439f83['helpers']['Colorizer']['config'] = {
        'cssPrefix': _0x2c0ea6(0x2f2),
        'classMap': {
            'bgColorElement': 'colorizer-bg-color',
            'bgImageElement': 'colorizer-bg-image',
            'parallax': _0x2c0ea6(0x2cf)
        },
        'afterInit': function() {}
    },
    Object[_0x2c0ea6(0x13a)](_0x439f83['helpers'][_0x2c0ea6(0x123)], {
        'bgColorElementClass': {
            'get': function() {
                var _0x50abc9 = _0x2c0ea6;
                return this[_0x50abc9(0x15c)][_0x50abc9(0x13e)] + this[_0x50abc9(0x15c)][_0x50abc9(0x2b7)][_0x50abc9(0x12c)];
            }
        },
        'bgImageElementClass': {
            'get': function() {
                var _0x4dba65 = _0x2c0ea6;
                return this[_0x4dba65(0x15c)][_0x4dba65(0x13e)] + this[_0x4dba65(0x15c)][_0x4dba65(0x2b7)][_0x4dba65(0x1d8)];
            }
        },
        'parallaxClass': {
            'get': function() {
                var _0x554551 = _0x2c0ea6;
                return this['config'][_0x554551(0x13e)] + this['config'][_0x554551(0x2b7)]['parallax'];
            }
        }
    }),
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x123)][_0x2c0ea6(0x240)] = function(_0x5e4ba8, _0x541e1c) {
        var _0x2571c9 = _0x2c0ea6
          , _0x3684cd = this;
        if (!_0x365598[_0x2571c9(0x2a5)](_0x5e4ba8, !![]))
            return _0x5e4ba8;
        return this[_0x2571c9(0x15c)] = _0x365598[_0x2571c9(0x32e)](!![], {}, this[_0x2571c9(0x15c)], _0x541e1c),
        _0x5e4ba8[_0x2571c9(0x1b1)](function(_0x42dc8f, _0x45c1f1) {
            var _0x20abec = _0x2571c9
              , _0x3663d5 = _0x365598(_0x45c1f1);
            !_0x3684cd[_0x20abec(0x247)](_0x3663d5) && _0x3684cd['appendBGColorElement'](_0x3663d5),
            !_0x3684cd[_0x20abec(0x18a)](_0x3663d5) && _0x3663d5[_0x20abec(0x2b9)]('bg-image-src') && _0x3684cd[_0x20abec(0x14c)](_0x3663d5);
        }),
        this[_0x2571c9(0x15c)]['afterInit'][_0x2571c9(0x223)](this),
        _0x5e4ba8;
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x123)][_0x2c0ea6(0x247)] = function(_0x266189) {
        var _0x11f407 = _0x2c0ea6;
        return _0x266189['children']('.' + this[_0x11f407(0x244)])[_0x11f407(0x184)];
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x123)][_0x2c0ea6(0x18a)] = function(_0x48b299) {
        var _0x427622 = _0x2c0ea6;
        return _0x48b299['children']('.' + this[_0x427622(0x30c)])['length'];
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x123)]['appendBGColorElement'] = function(_0x5d358) {
        var _0x1ab160 = _0x2c0ea6
          , _0x1db9eb = this
          , _0x2ff85a = _0x365598(_0x1ab160(0x168), {
            'class': _0x1db9eb['bgColorElementClass']
        });
        return _0x5d358['prepend'](_0x2ff85a);
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)]['Colorizer'][_0x2c0ea6(0x14c)] = function(_0x391d5a) {
        var _0x1f3263 = _0x2c0ea6
          , _0x36a981 = this
          , _0x43383a = _0x391d5a[_0x1f3263(0x2b9)](_0x1f3263(0x25a))
          , _0x532b64 = _0x365598(_0x1f3263(0x168), {
            'class': _0x36a981[_0x1f3263(0x30c)]
        });
        return _0x532b64['css'](_0x1f3263(0x28b), 'url(\x22' + _0x43383a + '\x22)'),
        _0x391d5a[_0x1f3263(0x2da)](_0x532b64),
        _0x391d5a;
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x2c2)] = function(_0x3b4570) {
        var _0x41edad = _0x2c0ea6
          , _0xdd747e = {
            'after': '',
            'before': '',
            'content': '',
            'cssPrefix': 'raffles-',
            'cssClass': ''
        }
          , _0x328f6b = _0x41edad(0x183);
        _0x3b4570 = _0x365598[_0x41edad(0x32e)](_0xdd747e, _0x3b4570);
        for (var _0x281990 in _0x3b4570) {
            _0x328f6b = _0x328f6b['replace'](new RegExp('%' + _0x281990 + '%','g'), _0x3b4570[_0x281990]);
        }
        _0x476ef7[_0x41edad(0x27f)]('')['addClass'](_0x3b4570['cssPrefix'] + _0x41edad(0x2e1))[_0x41edad(0x236)](_0x328f6b);
    }
    ,
    (_0x439f83['helpers']['dynamicBgImage'] = function(_0x4cb6a5) {
        var _0x78ebae = _0x2c0ea6;
        _0x4cb6a5 = _0x365598['isjQuery'](_0x4cb6a5) ? _0x4cb6a5 : _0x365598(_0x78ebae(0x1fb));
        if (!_0x4cb6a5['length'])
            return;
        return _0x4cb6a5[_0x78ebae(0x1b1)](function(_0x4c0fe8, _0x3590fd) {
            var _0x2afb58 = _0x78ebae
              , _0x33ff4d = _0x365598(_0x3590fd);
            if (!_0x33ff4d['data']('bg-image-src'))
                return;
            _0x33ff4d[_0x2afb58(0x151)](_0x2afb58(0x28b), _0x2afb58(0x1a6) + _0x33ff4d[_0x2afb58(0x2b9)](_0x2afb58(0x25a)) + '\x22)');
        });
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)]['toggledFields'] = function() {
        var _0x4a5cf0 = _0x2c0ea6;
        _0x476ef7[_0x4a5cf0(0x156)](_0x4a5cf0(0x2ec))['on']('click.rafflesToggledFields', _0x4a5cf0(0x28f), function(_0x5e0d63) {
            var _0x564f6a = _0x4a5cf0
              , _0x40b75a = _0x365598(this)
              , _0x7692d = _0x40b75a['siblings'](_0x564f6a(0x2a0));
            _0x40b75a[_0x564f6a(0x2f8)](_0x564f6a(0x2ff)),
            _0x7692d['length'] && _0x7692d[_0x564f6a(0x2e3)]()['slideToggle']({
                'duration': _0x439f83[_0x564f6a(0x1b2)],
                'easing': _0x439f83[_0x564f6a(0x321)]
            });
        });
    }
    ),
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x1eb)] = function() {
        var _0x47bb73 = _0x2c0ea6, _0x33e308 = _0x365598(_0x47bb73(0x18e)), _0x2bf564, _0x38f926, _0x466fde;
        if (!_0x33e308[_0x47bb73(0x184)] || _0x33e308[_0x47bb73(0x2f9)](_0x47bb73(0x2be)))
            return;
        _0x2bf564 = _0x33e308[_0x47bb73(0x277)](_0x47bb73(0x251));
        if (!_0x2bf564[_0x47bb73(0x184)])
            return;
        _0x38f926 = _0x33e308[_0x47bb73(0x277)]('#prev\x20>\x20a'),
        _0x466fde = _0x33e308[_0x47bb73(0x277)](_0x47bb73(0x1dd)),
        _0x38f926['length'] && _0x365598(_0x47bb73(0x17f), {
            'class': _0x47bb73(0x285),
            'html': _0x439f83['RTL'] ? '<i\x20class=\x22icon\x20licon-arrow-right\x22></i>' : _0x47bb73(0x16b),
            'href': _0x38f926[_0x47bb73(0x23e)](_0x47bb73(0x2fb))
        })[_0x47bb73(0x245)](_0x2bf564),
        _0x466fde[_0x47bb73(0x184)] && _0x365598(_0x47bb73(0x17f), {
            'class': _0x47bb73(0x2ea),
            'html': _0x439f83['RTL'] ? _0x47bb73(0x16b) : '<i\x20class=\x22icon\x20licon-arrow-right\x22></i>',
            'href': _0x466fde['attr'](_0x47bb73(0x2fb))
        })[_0x47bb73(0x245)](_0x2bf564),
        _0x33e308['addClass'](_0x47bb73(0x2be));
    }
    ,
    _0x439f83['baseOwlSettings'] = {
        'items': 0x1,
        'margin': 0x20,
        'nav': !![],
        'loop': !![],
        'rtl': _0x439f83[_0x2c0ea6(0x15e)],
        'dots': !![],
        'autoplayHoverPause': !![],
        'smartSpeed': _0x439f83[_0x2c0ea6(0x1b2)],
        'fluidSpeed': _0x439f83[_0x2c0ea6(0x1b2)],
        'autoplaySpeed': _0x439f83[_0x2c0ea6(0x1b2)],
        'navSpeed': _0x439f83[_0x2c0ea6(0x1b2)],
        'dotsSpeed': _0x439f83[_0x2c0ea6(0x1b2)],
        'dragEndSpeed': _0x439f83[_0x2c0ea6(0x1b2)]
    },
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x2f3)] = function(_0x36e735) {
        var _0x526924 = _0x2c0ea6;
        _0x36e735 = _0x36e735 ? _0x36e735 : _0x365598(_0x526924(0x19e));
        if (!_0x36e735[_0x526924(0x184)])
            return;
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x290)] = function(_0x55fa7d, _0x44e398) {
        if (_0x55fa7d['hasClass']('owl-carousel--vadaptive'))
            return;
        setTimeout(function() {
            var _0xd42204 = _0x5144
              , _0x1fa8e5 = 0x0
              , _0x1be743 = _0x55fa7d[_0xd42204(0x277)](_0xd42204(0x1e9))
              , _0x3fca09 = _0x1be743[_0xd42204(0x29d)]('.active')[_0xd42204(0x328)]();
            _0x1be743['children']()['css'](_0xd42204(0x1d1), _0xd42204(0x291)),
            _0x3fca09[_0xd42204(0x1b1)](function(_0x5008dc, _0x2ec9df) {
                var _0x7aa0e3 = _0xd42204
                  , _0x2b4acb = _0x365598(_0x2ec9df)
                  , _0x1e70d5 = _0x2b4acb[_0x7aa0e3(0x2f6)]();
                if (_0x1e70d5 > _0x1fa8e5)
                    _0x1fa8e5 = _0x1e70d5;
            }),
            _0x55fa7d[_0xd42204(0x277)](_0xd42204(0x259))[_0xd42204(0x2e3)]()[_0xd42204(0x20c)]({
                'height': _0x1fa8e5
            }, {
                'duration': 0x96,
                'complete': function() {
                    var _0x8ed9a5 = _0xd42204;
                    if (!_0x44e398)
                        return;
                    _0x439f83[_0x8ed9a5(0x2a8)][_0x8ed9a5(0x219)](_0x365598(this));
                }
            });
        }, 0x1);
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x219)] = function(_0x3871a7) {
        var _0x389e08 = _0x2c0ea6
          , _0x36e517 = _0x3871a7[_0x389e08(0x182)](_0x389e08(0x1b5));
        if (_0x36e517[_0x389e08(0x184)])
            _0x36e517[_0x389e08(0x221)](_0x389e08(0x1fe));
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x157)] = function(_0x15b74c) {
        setTimeout(function() {
            var _0x4c32a0 = _0x5144
              , _0x1ed282 = _0x15b74c[_0x4c32a0(0x2b9)](_0x4c32a0(0x159))[_0x4c32a0(0x220)];
            if (_0x1ed282[_0x4c32a0(0x2a3)] || _0x1ed282['loop'])
                return;
            var _0x2b144e = _0x15b74c[_0x4c32a0(0x277)](_0x4c32a0(0x29b))
              , _0x51534d = _0x15b74c[_0x4c32a0(0x277)](_0x4c32a0(0x126));
            if (_0x15b74c[_0x4c32a0(0x277)](_0x4c32a0(0x1e9))[_0x4c32a0(0x302)]()[_0x4c32a0(0x2f9)](_0x4c32a0(0x329)))
                _0x2b144e[_0x4c32a0(0x1d5)](_0x4c32a0(0x132));
            else
                _0x2b144e[_0x4c32a0(0x22d)](_0x4c32a0(0x132));
            if (_0x15b74c['find'](_0x4c32a0(0x1e9))[_0x4c32a0(0x21c)]()[_0x4c32a0(0x2f9)](_0x4c32a0(0x329)))
                _0x51534d[_0x4c32a0(0x1d5)](_0x4c32a0(0x132));
            else
                _0x51534d[_0x4c32a0(0x22d)](_0x4c32a0(0x132));
        }, 0x64);
    }
    ,
    _0x439f83['helpers']['owlSettings'] = function(_0x1813be) {
        var _0x1f6b3e = _0x2c0ea6;
        return _0x365598['extend'](!![], {}, _0x439f83[_0x1f6b3e(0x2b3)], _0x1813be);
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)]['owlSync'] = {
        'init': function() {
            var _0x464cfe = _0x2c0ea6;
            this[_0x464cfe(0x1c1)] = _0x365598(_0x464cfe(0x2d0));
            if (!this['collection'][_0x464cfe(0x184)])
                return;
            this[_0x464cfe(0x24d)]();
        },
        'prepare': function() {
            var _0x5ed0b5 = _0x2c0ea6;
            this[_0x5ed0b5(0x1c1)][_0x5ed0b5(0x1b1)](function(_0x467a49, _0x5e84d9) {
                var _0x4bce98 = _0x5ed0b5
                  , _0x39ef86 = _0x365598(_0x5e84d9)
                  , _0x1b9009 = _0x365598(_0x39ef86['data'](_0x4bce98(0x1cf)));
                _0x1b9009['on']('changed.owl.carousel', function(_0x163531) {
                    var _0x611056 = _0x4bce98
                      , _0x39bea2 = _0x163531[_0x611056(0x1fd)][_0x611056(0x2c3)];
                    if (!_0x1b9009['data'](_0x611056(0x235)))
                        _0x39ef86[_0x611056(0x170)]('to.owl.carousel', [_0x39bea2, 0x15e, !![]]);
                    _0x1b9009['data'](_0x611056(0x235), ![]);
                }),
                _0x39ef86['on']('prev.owl.carousel', function() {
                    var _0x2b455f = _0x4bce98;
                    _0x1b9009[_0x2b455f(0x170)]('prev.owl.carousel');
                }),
                _0x39ef86['on'](_0x4bce98(0x309), function() {
                    var _0x1ca260 = _0x4bce98;
                    _0x1b9009[_0x1ca260(0x170)]('next.owl.carousel');
                }),
                _0x39ef86['on']('click.owlSync', _0x4bce98(0x1e9), function(_0x19b6e5) {
                    var _0x154533 = _0x4bce98;
                    _0x19b6e5[_0x154533(0x2fa)]();
                    var _0x890631 = _0x365598(this)[_0x154533(0x2c3)]();
                    _0x1b9009[_0x154533(0x2b9)](_0x154533(0x235), !![]),
                    _0x1b9009[_0x154533(0x170)](_0x154533(0x2db), [_0x890631, 0x15e, !![]]);
                });
            });
        }
    };
    function _0x200c5e(_0xed0392, _0x52f5f7) {
        var _0x58e623 = _0x2c0ea6;
        this[_0x58e623(0x1a3)] = _0xed0392,
        this[_0x58e623(0x15c)] = _0x365598[_0x58e623(0x32e)](_0x200c5e[_0x58e623(0x15c)], _0x52f5f7),
        Object[_0x58e623(0x13a)](this, {
            'bottomLevelElementClass': {
                'get': function() {
                    var _0x56b5a4 = _0x58e623;
                    return this[_0x56b5a4(0x15c)]['cssPrefix'] + this[_0x56b5a4(0x15c)][_0x56b5a4(0x2b7)][_0x56b5a4(0x18b)];
                }
            },
            'topLevelElementClass': {
                'get': function() {
                    var _0x349ef0 = _0x58e623;
                    return this[_0x349ef0(0x15c)][_0x349ef0(0x13e)] + this['config'][_0x349ef0(0x2b7)][_0x349ef0(0x1ce)];
                }
            }
        });
    }
    ;_0x200c5e[_0x2c0ea6(0x15c)] = {
        'cssPrefix': _0x2c0ea6(0x2f2),
        'bottomLevelElements': _0x2c0ea6(0x1ee),
        'topLevelElements': _0x2c0ea6(0x1ee),
        'estimate': 0x5,
        'rtl': _0x439f83['RTL'],
        'classMap': {
            'bottomLevelElement': _0x2c0ea6(0x255),
            'topLevelElement': _0x2c0ea6(0x2c8)
        }
    },
    _0x200c5e[_0x2c0ea6(0x171)][_0x2c0ea6(0x240)] = function() {
        var _0x2a7ffc = _0x2c0ea6;
        return this[_0x2a7ffc(0x1a0)](),
        this;
    }
    ,
    _0x200c5e[_0x2c0ea6(0x171)]['_buildMarkup'] = function() {
        var _0x474953 = _0x2c0ea6
          , _0x3b9060 = this;
        if (this['_markupBuilded'])
            return;
        this[_0x474953(0x1a3)][_0x474953(0x151)]({
            'position': 'relative',
            'display': 'inline-block'
        });
        if (this[_0x474953(0x15c)][_0x474953(0x2c9)]) {
            this[_0x474953(0x1a8)] = _0x365598('<div></div>', {
                'class': _0x3b9060[_0x474953(0x173)],
                'style': _0x474953(0x242)
            });
            for (var _0x5bc3e7 = 0x0; _0x5bc3e7 < 0x5; _0x5bc3e7++)
                this['$topLevelEl'][_0x474953(0x236)](this[_0x474953(0x15c)][_0x474953(0x2c9)]);
            this['$element'][_0x474953(0x236)](this[_0x474953(0x1a8)]);
        }
        if (this[_0x474953(0x15c)][_0x474953(0x200)]) {
            this[_0x474953(0x1aa)] = _0x365598('<div></div>', {
                'class': _0x3b9060[_0x474953(0x20d)],
                'style': _0x474953(0x224)
            });
            for (var _0x5bc3e7 = 0x0; _0x5bc3e7 < 0x5; _0x5bc3e7++)
                this[_0x474953(0x1aa)][_0x474953(0x236)](this[_0x474953(0x15c)][_0x474953(0x200)]);
            this['$element']['append'](this[_0x474953(0x1aa)]);
        }
        this[_0x474953(0x1a5)](this[_0x474953(0x15c)][_0x474953(0x145)]),
        this[_0x474953(0x2b5)] = !![],
        this[_0x474953(0x1a3)][_0x474953(0x170)](_0x474953(0x308), [this[_0x474953(0x1a3)]]);
    }
    ,
    _0x200c5e[_0x2c0ea6(0x171)][_0x2c0ea6(0x1a5)] = function(_0x27ebb8) {
        var _0x986e55 = _0x2c0ea6;
        if (this[_0x986e55(0x15c)]['topLevelElements'])
            this['$topLevelEl'][_0x986e55(0x151)](_0x986e55(0x26b), _0x27ebb8 / 0x5 * 0x64 + '%');
        else {
            if (this[_0x986e55(0x15c)]['bottomLevelElements']) {
                this[_0x986e55(0x1aa)][_0x986e55(0x27f)]('');
                for (var _0x3317c0 = 0x0; _0x3317c0 < Math[_0x986e55(0x26f)](_0x27ebb8); _0x3317c0++)
                    this[_0x986e55(0x1aa)][_0x986e55(0x236)](this[_0x986e55(0x15c)][_0x986e55(0x200)]);
            }
        }
    }
    ,
    _0x439f83['helpers']['rating'] = function(_0x34b99b, _0x3c6258) {
        var _0x89b68f = _0x2c0ea6;
        _0x3c6258 = _0x3c6258 || {};
        if (!_0x365598[_0x89b68f(0x2a5)](_0x34b99b) || !_0x34b99b['length'])
            return _0x34b99b;
        return _0x34b99b['each'](function(_0x2dec7c, _0x2593a4) {
            var _0x3db3f0 = _0x89b68f
              , _0x2d4317 = _0x365598(_0x2593a4)
              , _0x194483 = _0x365598[_0x3db3f0(0x32e)](!![], {}, _0x3c6258, {
                'estimate': _0x2d4317['data'](_0x3db3f0(0x145))
            });
            if (!_0x2d4317[_0x3db3f0(0x2b9)]('Rating'))
                _0x2d4317[_0x3db3f0(0x2b9)]('Rating', new _0x200c5e(_0x2d4317,_0x194483)['init']());
        });
    }
    ,
    _0x439f83['helpers']['ratingField'] = function(_0x3823f3) {
        var _0x5b1761 = _0x2c0ea6;
        if (!_0x365598[_0x5b1761(0x2a5)](_0x3823f3))
            return;
        _0x3823f3['on'](_0x5b1761(0x13c), _0x5b1761(0x2f0), function(_0x1a340e) {
            var _0x2bafc7 = _0x5b1761
              , _0x3aa93e = _0x365598(this)
              , _0x13bad0 = _0x3aa93e[_0x2bafc7(0x182)](_0x2bafc7(0x179))
              , _0x348854 = _0x3aa93e['index']() + 0x1
              , _0x4e9531 = _0x13bad0[_0x2bafc7(0x2b9)]('Rating')
              , _0x5f4a65 = _0x13bad0['siblings'](_0x2bafc7(0x28a));
            _0x4e9531 && (_0x4e9531[_0x2bafc7(0x1a5)](_0x439f83['RTL'] ? 0x6 - _0x348854 : _0x348854),
            _0x5f4a65['length'] && _0x5f4a65[_0x2bafc7(0x1de)](_0x348854)),
            _0x1a340e['preventDefault'](),
            _0x1a340e['stopPropagation']();
        });
    }
    ,
    _0x439f83['helpers']['gridOwl'] = {
        '_commonLayoutConfig': {
            'columns-4': {
                'responsive': {
                    0x0: {
                        'items': 0x1
                    },
                    0x300: {
                        'items': 0x2
                    },
                    0x4b0: {
                        'items': 0x3
                    },
                    0x58c: {
                        'items': 0x4
                    }
                }
            },
            'columns-4-sidebar': {
                'responsive': {
                    0x0: {
                        'items': 0x1
                    },
                    0x3e0: {
                        'items': 0x2
                    },
                    0x4b0: {
                        'items': 0x3
                    }
                }
            },
            'columns-3': {
                'responsive': {
                    0x0: {
                        'items': 0x1
                    },
                    0x300: {
                        'items': 0x2
                    },
                    0x4b0: {
                        'items': 0x3
                    }
                }
            },
            'columns-3-sidebar': {
                'responsive': {
                    0x0: {
                        'items': 0x1
                    },
                    0x3e0: {
                        'items': 0x2
                    },
                    0x4b0: {
                        'items': 0x3
                    }
                }
            },
            'columns-2': {
                'responsive': {
                    0x0: {
                        'items': 0x1
                    },
                    0x334: {
                        'items': 0x2
                    }
                }
            },
            'columns-2-sidebar': {
                'responsive': {
                    0x0: {
                        'items': 0x1
                    },
                    0x3e0: {
                        'items': 0x2
                    }
                }
            }
        },
        '_$collection': _0x365598(),
        '_individualConfigs': {}
    },
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x2a1)][_0x2c0ea6(0x240)] = function(_0x52a84e) {
        var _0x1407fa = _0x2c0ea6
          , _0x2f28a2 = this;
        return _0x52a84e = _0x365598[_0x1407fa(0x2a5)](_0x52a84e) ? _0x52a84e : _0x365598(_0x1407fa(0x327)),
        _0x52a84e['each'](function(_0x2cccda, _0x1c0047) {
            var _0x419748 = _0x1407fa
              , _0x1bf208 = _0x365598(_0x1c0047);
            if (_0x2f28a2[_0x419748(0x288)][_0x419748(0x29d)](_0x1bf208)['length'])
                return;
            _0x2f28a2[_0x419748(0x288)] = _0x2f28a2[_0x419748(0x288)][_0x419748(0x1c4)](_0x1bf208);
        }),
        this['update'](),
        _0x52a84e;
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x2a1)][_0x2c0ea6(0x28e)] = function(_0x45ddfe, _0x4cca1a) {
        var _0x6c9aab = _0x2c0ea6;
        return this[_0x6c9aab(0x31e)][_0x45ddfe] = _0x4cca1a,
        this;
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)]['gridOwl'][_0x2c0ea6(0x1c4)] = function(_0x16e552) {
        var _0x4ccf57 = _0x2c0ea6;
        return _0x365598[_0x4ccf57(0x2a5)](_0x16e552) && !this[_0x4ccf57(0x288)][_0x4ccf57(0x29d)](_0x16e552)[_0x4ccf57(0x184)] && (this['_$collection'] = this[_0x4ccf57(0x288)]['add'](_0x16e552),
        this[_0x4ccf57(0x1a5)]()),
        this;
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x2a1)][_0x2c0ea6(0x1a5)] = function() {
        var _0x3b09f1 = _0x2c0ea6
          , _0x5c7fda = this;
        return this[_0x3b09f1(0x288)][_0x3b09f1(0x1b1)](function(_0x4c9ac3, _0x380d1d) {
            var _0x43811f = _0x3b09f1, _0x5c56ba = _0x365598(_0x380d1d), _0x36d5d5 = {}, _0x4f325f, _0x2aafd0;
            if (_0x5c56ba[_0x43811f(0x2b9)](_0x43811f(0x159)))
                return;
            _0x4f325f = _0x5c7fda[_0x43811f(0x233)](_0x5c56ba);
            _0x4f325f > 0x1 && (_0x5c56ba[_0x43811f(0x182)](_0x43811f(0x268))[_0x43811f(0x184)] ? _0x2aafd0 = 'columns-' + _0x4f325f + _0x43811f(0x304) : _0x2aafd0 = _0x43811f(0x283) + _0x4f325f,
            _0x365598[_0x43811f(0x32e)](_0x36d5d5, _0x5c7fda[_0x43811f(0x31f)][_0x2aafd0]));
            for (var _0x2fd261 in _0x5c7fda[_0x43811f(0x31e)]) {
                _0x5c56ba[_0x43811f(0x182)](_0x2fd261)[_0x43811f(0x184)] && (_0x365598[_0x43811f(0x32e)](_0x36d5d5, _0x5c7fda[_0x43811f(0x31e)][_0x2fd261]),
                _0x5c56ba[_0x43811f(0x182)](_0x43811f(0x268))[_0x43811f(0x184)] && (_0x36d5d5[_0x43811f(0x154)] = _0x36d5d5[_0x43811f(0x222)]));
            }
            _0x5c56ba[_0x43811f(0x196)](_0x439f83[_0x43811f(0x2a8)]['owlSettings'](_0x36d5d5));
        }),
        this;
    }
    ,
    _0x439f83[_0x2c0ea6(0x2a8)][_0x2c0ea6(0x2a1)]['_getColumnsCount'] = function(_0x25067d) {
        var _0x2590c2 = _0x2c0ea6;
        if (_0x25067d['hasClass']('raffles-grid--cols-4'))
            return 0x4;
        else {
            if (_0x25067d[_0x2590c2(0x2f9)](_0x2590c2(0x2df)))
                return 0x3;
            else {
                if (_0x25067d['hasClass'](_0x2590c2(0x2c5)))
                    return 0x2;
                else {
                    if (_0x25067d['hasClass'](_0x2590c2(0x31a)))
                        return 0x5;
                }
            }
        }
        return 0x1;
    }
    ;
    // if (_0x365598(_0x2c0ea6(0x315))['length']) {
    //     function _0x782d51() {
    //         var _0xd717f2 = _0x2c0ea6
    //           , _0x4e1a16 = {
    //             'center': {
    //                 'lat': 51.503454,
    //                 'lng': -0.124755
    //             },
    //             'zoom': 0xe,
    //             'mapTypeId': google['maps'][_0xd717f2(0x138)]['ROADMAP']
    //         }
    //           , _0x53a6b6 = document[_0xd717f2(0x1ca)]('googleMap');
    //         if (_0x53a6b6 !== null)
    //             var _0x53a6b6 = new google[(_0xd717f2(0x1c6))][(_0xd717f2(0x232))](document[_0xd717f2(0x1ca)](_0xd717f2(0x278)),_0x4e1a16);
    //         var _0x36a2b6 = window[_0xd717f2(0x16c)](document[_0xd717f2(0x1d2)])
    //           , _0x207f8c = _0x36a2b6[_0xd717f2(0x2ae)](_0xd717f2(0x1e6))
    //           , _0x42ff1d = new google[(_0xd717f2(0x1c6))][(_0xd717f2(0x314))]({
    //             'position': {
    //                 'lat': 51.503454,
    //                 'lng': -0.124755
    //             },
    //             'map': _0x53a6b6,
    //             'icon': {
    //                 'path': _0xd717f2(0x243),
    //                 'fillColor': _0x207f8c,
    //                 'strokeWeight': 0x0,
    //                 'fillOpacity': 0x1
    //             }
    //         });
    //         _0x42ff1d[_0xd717f2(0x320)](_0x53a6b6),
    //         google[_0xd717f2(0x1c6)]['event']['addListener'](_0x42ff1d, _0xd717f2(0x2e8), function() {
    //             var _0x2c2d88 = _0xd717f2;
    //             _0x53a6b6[_0x2c2d88(0x17c)](0x9),
    //             _0x53a6b6[_0x2c2d88(0x2fe)](_0x42ff1d[_0x2c2d88(0x1cc)]());
    //         });
    //     }
    //     google[_0x2c0ea6(0x1c6)]['event'][_0x2c0ea6(0x144)](window, _0x2c0ea6(0x166), _0x782d51);
    // }
    _0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x299)] = function() {
        var _0x1ce474 = _0x2c0ea6;
        _0x365598(_0x1ce474(0x1d2))['on'](_0x1ce474(0x30d), '.raffles-close-item:not(.shopping-cart-full\x20.raffles-close-item)', function(_0x283ea7) {
            var _0x306f0c = _0x1ce474;
            _0x283ea7[_0x306f0c(0x2fa)](),
            _0x365598(this)[_0x306f0c(0x1f0)]()[_0x306f0c(0x2e3)]()[_0x306f0c(0x20c)]({
                'opacity': 0x0
            }, function() {
                var _0x1ceb96 = _0x306f0c;
                _0x365598(this)['stop']()[_0x1ceb96(0x1db)](function() {
                    var _0x550456 = _0x1ceb96;
                    _0x365598(this)[_0x550456(0x16a)]();
                });
            });
        });
        var _0x41dd1a = _0x365598(_0x1ce474(0x2af));
        return _0x41dd1a['on'](_0x1ce474(0x1ab), _0x1ce474(0x169), function(_0x264467) {
            var _0x4f8aad = _0x1ce474;
            _0x264467['preventDefault'](),
            _0x365598(this)[_0x4f8aad(0x182)]('tr')['stop']()[_0x4f8aad(0x248)](function() {
                var _0xbd0601 = _0x4f8aad;
                _0x365598(this)[_0xbd0601(0x16a)]();
            });
        }),
        this;
    }
    ,
    (_0x439f83[_0x2c0ea6(0x1e1)][_0x2c0ea6(0x189)] = function(_0x2ef1ef) {
        var _0x1d05cd = _0x2c0ea6
          , _0xa4291c = _0x365598('.hidden-section');
        if (!_0xa4291c[_0x1d05cd(0x184)])
            return;
        return _0xa4291c[_0x1d05cd(0x1b1)](function(_0x155ac1, _0x2977ae) {
            var _0x1a56f5 = _0x1d05cd;
            _0x365598(_0x2977ae)[_0x1a56f5(0x277)]('.content')[_0x1a56f5(0x2f5)]();
        }),
        _0xa4291c['on'](_0x1d05cd(0x1cd), _0x1d05cd(0x246), function(_0x22af1b) {
            var _0xd9ad7f = _0x1d05cd;
            _0x22af1b[_0xd9ad7f(0x2fa)](),
            _0x365598(this)[_0xd9ad7f(0x2f8)](_0xd9ad7f(0x187));
            var _0x4cf167 = _0x365598(this)['closest'](_0xd9ad7f(0x282))[_0xd9ad7f(0x277)](_0xd9ad7f(0x1c5));
            _0x4cf167[_0xd9ad7f(0x161)]({
                'duration': 0x1f4,
                'easing': _0xd9ad7f(0x17e),
                'complete': _0x2ef1ef ? _0x2ef1ef : function() {}
            });
        }),
        _0xa4291c;
    }
    ,
    _0x365598[_0x2c0ea6(0x32e)]({
        'isjQuery': function(_0x56df37, _0x2c66d2) {
            var _0x2a4b10 = _0x2c0ea6;
            if (_0x56df37 === undefined || _0x56df37 === null)
                return ![];
            return _0x2c66d2 === undefined ? _0x56df37 instanceof jQuery : _0x365598[_0x2a4b10(0x2a5)](_0x56df37) && _0x56df37[_0x2a4b10(0x184)];
        }
    })),
    _0x365598['fn'][_0x2c0ea6(0x32e)]({
        'jQueryImagesLoaded': function() {
            var _0x2aeaf3 = _0x2c0ea6
              , _0x52ccd9 = this[_0x2aeaf3(0x277)](_0x2aeaf3(0x186));
            if (!_0x52ccd9[_0x2aeaf3(0x184)])
                return _0x365598[_0x2aeaf3(0x191)]()[_0x2aeaf3(0x17a)]()['promise']();
            var _0x19e736 = [];
            return _0x52ccd9['each'](function() {
                var _0x454f1f = _0x2aeaf3
                  , _0x16278a = _0x365598[_0x454f1f(0x191)]();
                _0x19e736['push'](_0x16278a);
                var _0x361de9 = new Image();
                _0x361de9[_0x454f1f(0x29c)] = function() {
                    _0x16278a['resolve']();
                }
                ,
                _0x361de9['onerror'] = function() {
                    var _0x1e3c9b = _0x454f1f;
                    _0x16278a[_0x1e3c9b(0x17a)]();
                }
                ,
                _0x361de9['src'] = this[_0x454f1f(0x203)];
            }),
            _0x365598[_0x2aeaf3(0x24a)][_0x2aeaf3(0x14d)](_0x365598, _0x19e736);
        }
    }),
    _0x3960ea['on']('beforeClose', function(_0x3b2549) {
        var _0x17888c = _0x2c0ea6;
        _0x365598(_0x3b2549[_0x17888c(0x136)])[_0x17888c(0x2f9)]('raffles-modal') && _0x3b2549[_0x17888c(0x165)]();
    }),
    _0x3960ea[_0x2c0ea6(0x23b)](function() {
        _0x439f83['afterDOMReady']();
    }),
    _0x365598(window)['on'](_0x2c0ea6(0x166), function() {
        var _0x357e2c = _0x2c0ea6;
        _0x281b33[_0x357e2c(0x15d)](function() {
            var _0x58ccd1 = _0x357e2c;
            _0x439f83[_0x58ccd1(0x2fc)]();
        });
        if (_0x365598('.raffles-datepicker')[_0x357e2c(0x184)]) {
            _0x365598(_0x357e2c(0x1a4))['on'](_0x357e2c(0x2e8), function() {
                var _0x1673c4 = _0x357e2c;
                _0x365598(this)[_0x1673c4(0x1f0)]()[_0x1673c4(0x2f8)](_0x1673c4(0x23f)),
                _0x365598(this)['next']('.raffles-datepicker-select')[_0x1673c4(0x161)]();
            });
            const _0x41a49c = _0x365598('.raffles-datepicker-select,\x20.raffles-datepicker-body');
            _0x365598(document)[_0x357e2c(0x1df)](_0x18a0ad=>{
                var _0x498536 = _0x357e2c;
                !_0x41a49c['is'](_0x18a0ad['target']) && _0x41a49c['has'](_0x18a0ad[_0x498536(0x136)])['length'] === 0x0 && (_0x365598(_0x498536(0x1a4))[_0x498536(0x22d)](_0x498536(0x249)),
                _0x365598('.raffles-datepicker-select')[_0x498536(0x1db)]());
            }
            );
        }
        ;_0x365598(_0x357e2c(0x190))['length'] && _0x365598(_0x357e2c(0x190))[_0x357e2c(0x196)]({
            'animateOut': _0x357e2c(0x248),
            'loop': !![],
            'margin': 0xa,
            'nav': !![],
            'responsive': {
                0x0: {
                    'items': 0x1
                },
                0x258: {
                    'items': 0x1
                },
                0x3e8: {
                    'items': 0x1
                }
            }
        });
        ;_0x365598(_0x357e2c(0x301))[_0x357e2c(0x184)] && _0x365598('.raffles-owl-moving')['on'](_0x357e2c(0x131), function() {
            var _0xf9f0ff = _0x357e2c
              , _0x41be08 = _0x365598(this);
            _0x41be08[_0xf9f0ff(0x277)](_0xf9f0ff(0x32a))[_0xf9f0ff(0x27f)]('');
            var _0x339bfb = 0x0
              , _0x4df5da = 0x0
              , _0x400d23 = 0x384 - 0x60
              , _0x21d903 = 0x3e8 - 0x60;
            _0x41be08[_0xf9f0ff(0x2bc)](function(_0xfcc2f5) {
                var _0x52f0fe = _0xf9f0ff
                  , _0x37d356 = _0x41be08[_0x52f0fe(0x277)](_0x52f0fe(0x29b))[_0x52f0fe(0x153)]();
                _0x339bfb = Math[_0x52f0fe(0x241)](_0xfcc2f5[_0x52f0fe(0x180)] - _0x37d356[_0x52f0fe(0x319)], _0x400d23),
                _0x4df5da = Math[_0x52f0fe(0x241)](_0xfcc2f5[_0x52f0fe(0x1d3)] - _0x37d356[_0x52f0fe(0x162)], _0x21d903);
                if (_0x339bfb < 0x0)
                    _0x339bfb = 0x0;
                if (_0x4df5da < 0x0)
                    _0x4df5da = 0x0;
            });
            var _0x39a289 = _0x41be08[_0xf9f0ff(0x277)](_0xf9f0ff(0x2d1))
              , _0x5642ee = 0x0
              , _0x389ffd = 0x0
              , _0x2f686f = setInterval(function() {
                var _0x50197b = _0xf9f0ff;
                _0x5642ee += (_0x339bfb - _0x5642ee) / 0x1,
                _0x389ffd += (_0x4df5da - _0x389ffd) / 0x1,
                _0x39a289[_0x50197b(0x151)]({
                    'left': _0x5642ee,
                    'top': _0x389ffd
                });
            }, 0x1)
              , _0x192759 = 0x0
              , _0x3c9082 = 0x0
              , _0x582a2c = 0x384 - 0x60
              , _0x1fc700 = 0x3e8 - 0x60;
            _0x41be08[_0xf9f0ff(0x2bc)](function(_0x29d3b5) {
                var _0x34e175 = _0xf9f0ff
                  , _0x215cb5 = _0x41be08[_0x34e175(0x277)](_0x34e175(0x126))['offset']();
                _0x192759 = Math['min'](_0x29d3b5[_0x34e175(0x180)] - _0x215cb5[_0x34e175(0x319)], _0x582a2c),
                _0x3c9082 = Math['min'](_0x29d3b5[_0x34e175(0x1d3)] - _0x215cb5[_0x34e175(0x162)], _0x1fc700);
                if (_0x192759 < 0x0)
                    _0x192759 = 0x0;
                if (_0x3c9082 < 0x0)
                    _0x3c9082 = 0x0;
            });
            var _0x2bbfb6 = _0x41be08[_0xf9f0ff(0x277)](_0xf9f0ff(0x313))
              , _0x323757 = 0x0
              , _0x5b56c6 = 0x0
              , _0x41d19a = setInterval(function() {
                var _0x676b49 = _0xf9f0ff;
                _0x323757 += (_0x192759 - _0x323757) / 0x1,
                _0x5b56c6 += (_0x3c9082 - _0x5b56c6) / 0x1,
                _0x2bbfb6[_0x676b49(0x151)]({
                    'left': _0x323757,
                    'top': _0x5b56c6
                });
            }, 0x1);
        });
        ;if (_0x365598(_0x357e2c(0x325))[_0x357e2c(0x184)]) {
            _0x365598(_0x357e2c(0x160))['on'](_0x357e2c(0x2e8), function(_0x5cb7d4) {
                var _0x583586 = _0x357e2c;
                _0x5cb7d4[_0x583586(0x2fa)](),
                _0x365598(this)[_0x583586(0x2e4)](_0x583586(0x204))['slideToggle'](),
                _0x365598(this)[_0x583586(0x1f0)]()['siblings']()[_0x583586(0x328)](_0x583586(0x204))[_0x583586(0x1db)]();
            }),
            _0x365598('#raffles-nav-btn')['on'](_0x357e2c(0x2e8), function(_0x5320d2) {
                var _0x2a549f = _0x357e2c;
                _0x5320d2[_0x2a549f(0x2fa)](),
                _0x365598(_0x2a549f(0x2e2))['length'] && _0x365598(_0x2a549f(0x27f))[_0x2a549f(0x2f8)](_0x2a549f(0x2ca)),
                _0x365598(_0x2a549f(0x30e))[_0x2a549f(0x2f8)]('hide'),
                _0x365598(_0x2a549f(0x250))[_0x2a549f(0x2f8)](_0x2a549f(0x1bd)),
                _0x365598(this)[_0x2a549f(0x2f8)]('raffles-opened'),
                _0x365598('#raffles-nav-canvas')['toggleClass']('raffles-nav-opened');
            });
            const _0x25f0a9 = _0x365598(_0x357e2c(0x238));
            _0x365598(document)[_0x357e2c(0x1df)](_0x461797=>{
                var _0xb488f = _0x357e2c;
                !_0x25f0a9['is'](_0x461797[_0xb488f(0x136)]) && _0x25f0a9[_0xb488f(0x205)](_0x461797[_0xb488f(0x136)])['length'] === 0x0 && (_0x365598('.raffles-nav-canvas')['removeClass'](_0xb488f(0x31b)),
                _0x365598(_0xb488f(0x2fd))[_0xb488f(0x22d)](_0xb488f(0x213)));
            }
            );
        }
        ;_0x365598(_0x357e2c(0x16e))[_0x357e2c(0x184)] && (_0x365598(_0x357e2c(0x197))['on'](_0x357e2c(0x2e8), function() {
            var _0x49d8b8 = _0x357e2c;
            _0x365598(this)['parent']()[_0x49d8b8(0x2e4)]()[_0x49d8b8(0x277)](_0x49d8b8(0x19e))[_0x49d8b8(0x170)](_0x49d8b8(0x309));
        }),
        _0x365598(_0x357e2c(0x178))['on']('click', function() {
            var _0x383c7d = _0x357e2c;
            _0x365598(this)[_0x383c7d(0x1f0)]()[_0x383c7d(0x2e4)]()[_0x383c7d(0x277)]('.owl-carousel')[_0x383c7d(0x170)]('prev.owl.carousel', [0x12c]);
        }));
        ;if (_0x365598(_0x357e2c(0x234))['length']) {
            var _0x571511 = _0x365598('.raffles-scroll-nav\x20>\x20ul\x20>\x20li');
            _0x365598('body')[_0x357e2c(0x2d5)]({
                'hash': !![],
                'filter': _0x357e2c(0x2e7),
                'onBefore': function() {
                    var _0x595fae = _0x357e2c;
                    this[_0x595fae(0x153)] = -0xf0;
                }
            }),
            _0x4a05ec(),
            _0x365598(window)[_0x357e2c(0x1f9)](function(_0x35f880) {
                _0x4a05ec();
            });
            var _0x8d5239 = 0xf0
              , _0x5ac930 = 0xf0;
            function _0x4a05ec() {
                var _0x19ebe3 = _0x357e2c
                  , _0x393d68 = _0x365598(window)[_0x19ebe3(0x135)]()
                  , _0x92af9f = []
                  , _0x54b827 = [];
                _0x365598(_0x19ebe3(0x1f6))[_0x19ebe3(0x277)](_0x19ebe3(0x15f))['each'](function() {
                    var _0x425d1d = _0x19ebe3;
                    _0x92af9f[_0x425d1d(0x146)](_0x365598(_0x365598(this)[_0x425d1d(0x23e)](_0x425d1d(0x2fb)))[_0x425d1d(0x153)]()['top']),
                    _0x54b827[_0x425d1d(0x146)](_0x365598(_0x365598(this)[_0x425d1d(0x23e)](_0x425d1d(0x2fb)))[_0x425d1d(0x153)]()['top'] + _0x365598(_0x365598(this)[_0x425d1d(0x23e)](_0x425d1d(0x2fb)))[_0x425d1d(0x1d1)]());
                }),
                _0x365598['each'](_0x92af9f, function(_0x17bcd5) {
                    var _0x587f0f = _0x19ebe3;
                    _0x393d68 > _0x92af9f[_0x17bcd5] - _0x8d5239 && _0x393d68 < _0x54b827[_0x17bcd5] - _0x5ac930 && _0x365598(_0x587f0f(0x210))['removeClass'](_0x587f0f(0x2e9))['eq'](_0x17bcd5)[_0x587f0f(0x1d5)](_0x587f0f(0x2e9));
                });
            }
        }
        ;_0x365598(_0x357e2c(0x324))[_0x357e2c(0x184)] && _0x365598(document)['scroll'](function() {
            var _0x33a0bc = _0x357e2c;
            _0x365598(this)[_0x33a0bc(0x135)]() >= _0x365598(_0x33a0bc(0x324))['offset']()[_0x33a0bc(0x162)] + 0x0 ? _0x365598('.raffles-header\x20.raffles-scroll-nav')['addClass'](_0x33a0bc(0x289)) : _0x365598(_0x33a0bc(0x2b8))[_0x33a0bc(0x22d)]('visible');
        });
        ;if (_0x365598(_0x357e2c(0x206))[_0x357e2c(0x184)]) {
            var _0x15795e = 0x0;
            _0x365598(_0x357e2c(0x1fc))[_0x357e2c(0x1b1)](function() {
                var _0x53d5ef = _0x357e2c;
                _0x365598(this)[_0x53d5ef(0x1d1)]() > _0x15795e && (_0x15795e = _0x365598(this)[_0x53d5ef(0x1d1)]());
            }),
            _0x365598(_0x357e2c(0x1fc))[_0x357e2c(0x1d1)](_0x15795e);
        }
        ;_0x365598(_0x357e2c(0x2a4))[_0x357e2c(0x184)] && _0x365598(_0x357e2c(0x32f))[_0x357e2c(0x2e8)](function() {
            var _0x221bfa = _0x357e2c
              , _0x89214a = _0x365598(this)['attr'](_0x221bfa(0x231));
            _0x365598('section[data-active\x20=\x20' + _0x89214a + ']')['addClass'](_0x221bfa(0x292))['siblings']()[_0x221bfa(0x22d)](_0x221bfa(0x292));
        });
        ;_0x365598(_0x357e2c(0x2dc))[_0x357e2c(0x184)] && _0x365598('.raffles-owl-center-auto.owl-carousel')['owlCarousel']({
            'margin': 0x20,
            'loop': !![],
            'autoWidth': !![],
            'items': 0x2
        });
    });
    if (_0x365598(_0x2c0ea6(0x25b))[_0x2c0ea6(0x184)]) {
        var _0x6be9fa = _0x365598(_0x2c0ea6(0x2a9));
        _0x365598(_0x2c0ea6(0x2d6))[_0x2c0ea6(0x262)]({
            'gallery': _0x2c0ea6(0x2d2),
            'galleryActiveClass': _0x2c0ea6(0x329),
            'zoomType': 'inner',
            'cursor': _0x2c0ea6(0x1e3),
            'responsive': !![],
            'zoomWindowFadeIn': 0x1f4,
            'zoomWindowFadeOut': 0x1f4,
            'easing': !![],
            'lensFadeIn': 0x1f4,
            'lensFadeOut': 0x1f4
        });
    }
    if (_0x365598(_0x2c0ea6(0x317))[_0x2c0ea6(0x184)]) {
        var _0x36a903 = _0x365598('.quantity');
        _0x36a903[_0x2c0ea6(0x1b1)](function() {
            var _0x5cc68d = _0x2c0ea6
              , _0x414e72 = _0x365598(this)
              , _0x3d52cf = _0x414e72['children'](_0x5cc68d(0x1ad))
              , _0x51175a = _0x414e72['children'](_0x5cc68d(0x2ed))
              , _0x22436b = +_0x51175a['val']();
            _0x3d52cf['on'](_0x5cc68d(0x2e8), function() {
                var _0x242377 = _0x5cc68d;
                if (_0x365598(this)[_0x242377(0x2f9)](_0x242377(0x164))) {
                    if (_0x22436b === 0x1)
                        return ![];
                    _0x51175a[_0x242377(0x1de)](--_0x22436b);
                } else
                    _0x51175a[_0x242377(0x1de)](++_0x22436b);
            });
        });
    }
    return _0x439f83;
}(window[_0xb2ab8c(0x25e)]);
function _0x2801() {
    var _0x14e894 = ['<i\x20class=\x22material-icons\x20active\x22>star</i>', 'rightPlaced', 'width', '.raffles-rating-field', 'Section', 'rafflesNewsletter', 'round', '.raffles-navigation\x20>\x20li\x20>\x20a', '.content,\x20.sidebar\x20,\x20.raffles-sidebar\x20,\x20#sidebar', 'afterOpen', 'replaceWith', 'MonkeysanNav', 'back-to-top\x20animated\x20stealthy', 'easeOutQuart', 'find', 'googleMap', 'padding-right', 'keydown.rafflesDropdown', '.raffles-simple-slideshow-thumbs.owl-carousel', 'keyCode', '5655372bEIsAE', 'speed', 'html', 'open', 'fixPosition', '.hidden-section', 'columns-', 'then', 'calendar-caption-prev\x20raffles-ln--independent', '<span\x20class=\x22icon\x22></span>', 'false', '_$collection', 'visible', 'input[type=\x22hidden\x22]', 'background-image', 'dropdown-element--y-top', '.raffles-owl-center', 'extendConfigFor', '.raffles-toggled-fields-invoker', 'owlContainerHeight', 'auto', 'clicked', '.raffles-grid-item', 'write', 'rafflesEventsCalendar', 'compile', 'spinner0', 'tweetie', 'closeBtn', '1287kchmid', '.owl-prev', 'onload', 'filter', 'Seconds', 'overflow', '.raffles-toggled-fields', 'gridOwl', '[class*=\x22raffles-section--stretched-content\x22]', 'autoplay', '#raffles-sync-elements', 'isjQuery', 'owlSettings', 'raffles', 'helpers', '.qv-preview', '.raffles-product-thumbs', '.raffles-tabs', 'ajax', 'arctic-modal', 'getPropertyValue', '.shopping-cart-full', '0\x200\x20', '.raffles-rating:not(.raffles-rating--independent)', 'activeClass', 'baseOwlSettings', 'readyState', '_markupBuilded', 'arctic-modal-ajax-data', 'classMap', '.raffles-header\x20.raffles-scroll-nav', 'data', 'zoomIn', 'svg', 'mousemove', 'ANIMATIONEND', 'raffles-calendar-rendered', 'beforeOpen', '.raffles-events-calendar', 'rafflesStickyHeaderSection', 'showCriticalFullScreenMessage', 'index', 'easing', 'raffles-grid--cols-2', 'xml', '<button></button>', 'rating-top-level', 'topLevelElements', 'with-src-menu', '16WnBHhb', 'Weeks', '_bindEvents', '', 'colorizer--parallax', '.owl-carousel[data-sync]', '.owl-prev\x20>\x20span', 'thumbnails', 'viewBox', 'raffles-preloader-circle', 'localScroll', '#zoom-image', 'updateContainer', '#000000', '?theme=', 'prepend', 'to.owl.carousel', '.raffles-owl-center-auto.owl-carousel', 'stretchedContentNoPadding', '', 'raffles-grid--cols-3', 'dropdown-title', 'body--has-critical-fullscreen-message', '.header-5', 'stop', 'next', '.owl-carousel.raffles-grid--cols-1.raffles-entities.type-5', 'stretchedContent', '.animated', 'click', 'raffles-active', 'calendar-caption-next\x20raffles-ln--independent', 'revolution', 'click.rafflesToggledFields', 'input[type=\x22text\x22]', '\x20style=\x22width:0;height:0;display:none;\x22></if', 'HotelPrive\x20HTML\x20Template', '.icon', 'availableError', 'raffles-', 'owlAdaptive', 'hideClass', 'hide', 'outerHeight', 'ISLEGACYBROWSER', 'toggleClass', 'hasClass', 'preventDefault', 'href', 'afterOuterResourcesLoaded', '.raffles-nav-btn', 'setCenter', 'raffles-toggled-fields-invoker--opened', 'title', '.raffles-owl-moving', 'first', 'rtl', '-sidebar', 'removeAttr', '.raffles-range-slider-input', '#rev_slider_1_1', 'built.raffles.Rating', 'next.owl.carousel', '_resizeTimeOutId', '.raffles-sponsors', 'bgImageElementClass', 'click.globalclose', '.raffles-lang', '.raffles-single-menu', '.raffles-colorizer--parallax\x20.raffles-colorizer-bg-image', 'fancybox', 'arctic-modal-ajax-action', '.owl-next\x20>\x20span', 'Marker', '#googleMap', 'url', '.quantity', '.raffles-alert-box--warning', 'left', 'raffles-grid--cols-5', 'raffles-nav-opened', 'Month', 'padding-left', '_individualConfigs', '_commonLayoutConfig', 'setMap', 'ANIMATIONEASING', 'loadingClass', 'rating', '#raffles-scroll-item', '#raffles-nav-canvas', 'stretched', '.raffles-grid.owl-carousel', 'children', 'active', '.owl-nav\x20>\x20button\x20>\x20span', '.full-scr', 'arctic-modal-type', 'Your\x20browser\x20does\x20not\x20support\x20some\x20technologies\x20this\x20site\x20use.\x20Please\x20update\x20your\x20browser\x20or\x20visit\x20the\x20site\x20using\x20more\x20modern\x20browser.', 'extend', '#raffles-sync-elements\x20.raffles-panels-title', 'Firefox', 'Colorizer', '.raffles-custom-select', 'value', '.owl-next', 'ratingField', 'arcticModals', '\x20replaced-svg', '<i\x20class=\x22icon\x20icon-sad\x22></i>', 'minutes', 'bgColorElement', '.raffles-alert-box', '.raffles-header--transparent\x20+\x20.raffles-breadcrumb[data-bg-image-src]', '[class*=\x22raffles-header-section--sticky\x22]:not([class*=\x22raffles-header-section--sticky-hidden\x22])', 'arcticmodal', 'mouseenter', 'raffles-disabled', 'location', 'Handlebars', 'scrollTop', 'target', '\x20id=\x22themenoticeframe\x22', 'MapTypeId', '<i\x20class=\x22material-icons\x22>star_border</i>', 'defineProperties', '', 'click.rafflesRatingField', 'colorizer-bg-image', 'cssPrefix', 'dropdown-element', 'defaults', '325788vuEFJg', 'backToTop', 'rafflesIsotopeWrapper', 'addDomListener', 'estimate', 'push', 'bindEvents', '38705HXPvvs', 'container', 'reset', 'IsotopeWrapper', 'appendBGImageElement', 'apply', 'rafflesSidebarHidden', 'true', 'dHMS', 'css', 'rame>', 'offset', 'responsive', 'Hours', 'off', 'owlNav', 'stealthy', 'owl.carousel', 'direction', '<div\x20class=\x22raffles-alert-box\x20raffles-alert-box--{{type}}\x22\x20style=\x22display:\x20none;\x22>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22raffles-alert-box-inner\x22>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20{{message}}\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>', 'config', 'done', 'RTL', 'a.animated', '.raffles-vr-nav\x20>\x20ul\x20>\x20li.menu-item-has-children\x20>\x20a', 'slideToggle', 'top', '.raffles-iso-tabs\x20.raffles-tabs-nav\x20.raffles-tab-link', 'qty-minus', 'stopImmediatePropagation', 'load', '.raffles-testimonials-inner\x20.owl-carousel', '<div></div>', '.raffles-close-item', 'remove', '<i\x20class=\x22icon\x20licon-arrow-left\x22></i>', 'getComputedStyle', 'margin-top', '.owl-carousel-custom-nav', 'isPlainObject', 'trigger', 'prototype', 'MonkeysanTabs', 'topLevelElementClass', '.raffles-range-slider', 'margin-left', 'click.rafflesArcticModals', '.raffles-rating--independent', '.raffles-custom-prev', '[data-estimate]', 'resolve', '.raffles-entities.with-bg-backplate.raffles-grid--cols-3', 'setZoom', '.raffles-range-slider-input2', 'easeOutQuint', '<a></a>', 'pageX', '[data-arctic-modal]', 'closest', '<div\x20class=\x22%cssPrefix%fullscreen-message\x20%cssClass%\x20%cssPrefix%aligner\x22>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22%cssPrefix%aligner-outer\x22>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22%cssPrefix%aligner-inner\x22>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22%cssPrefix%fullscreen-message-before\x22>%before%</div>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22%cssPrefix%fullscreen-message-content\x22>%content%</div>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22%cssPrefix%fullscreen-message-after\x22>%after%</div>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>', 'length', 'uncloseable', 'img[src!=\x22\x22]', 'toggled', 'values', 'hiddenSections', 'hasBGImageElement', 'bottomLevelElement', '.raffles-section--stretched-content,\x20.raffles-section--stretched-content-no-px', 'topPlacedClass', '.calendar_wrap', 'close', '.raffles-slider', 'Deferred', 'showClass', 'click.rafflesDropdown', 'newTab', 'error', 'owlCarousel', '.raffles-custom-next', 'addEventListener', 'year', 'loading', '<li>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22raffles-tweet\x22>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22raffles-tweet-content\x22>{{tweet.text}}</div>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</li>', 'load\x20resize\x20open', 'warning', '.owl-carousel', '.inner-container\x20.raffles-tab.raffles-active', '_buildMarkup', 'leftPlacedClass', 'fadeIn', '$element', '.raffles-datepicker-body', 'update', 'url(\x22', 'load\x20resize', '$topLevelEl', 'stretched.raffles.Section', '$bottomLevelEl', 'click.removeProduct', '%B\x20%d,\x20%Y', 'button', 'titleClass', 'afterClose', '[data-tooltip]', 'each', 'ANIMATIONDURATION', '.js-videoWrapper', 'Minutes', '.raffles-grid--isotope', '\x22\x20frameborder=\x220\x22', 'show', 'dynamicBgImage', '24184Dnqkft', 'toggle', '.owl-carousel.raffles-grid--cols-1:not(\x22.type-5\x22)', 'day', 'raffles-header-stationar', 'get', '.arcticmodal-container', '.raffles-alert-box--info', 'collection', 'hash', 'elementClass', 'add', '.content', 'maps', 'Years', 'raffles-preloader--disappearing', 'rafflesContactForm', 'getElementById', 'slider', 'getPosition', 'click.hidden', 'topLevelElement', 'sync', 'Breadcrumb', 'height', 'body', 'pageY', 'horizontal', 'addClass', 'slice', '3190425pzztYU', 'bgImageElement', 'slide', 'dropdown--opened', 'slideUp', 'preloader', '#next\x20>\x20a', 'val', 'mouseup', 'end', 'modules', 'slideDown', 'crosshair', 'rightPlacedClass', 'toggledFields', '--color-primary', 'stretchedContentClass', 'Days', '.owl-item', 'click.rafflesPreloader', 'calendarWidget', '8344590CrUmnU', 'ANIMATIONSUPPORTED', '<i\x20class=\x22icon\x20licon-star\x22></i>', '_initialized', 'parent', 'btn', 'onunload', 'seconds', '.tabs-section', 'getDocumentGeometry', '#menu', 'indexOf', 'zoomOut', 'scroll', 'timeOut', '[data-bg-image-src]', '.raffles-same-height\x20.raffles-gallery-item\x20.raffles-gallery-desc', 'item', 'layout', '#rev_slider_1_1_wrapper', 'bottomLevelElements', 'breakpoint', '.raffles-panels--toggles', 'src', '.sub-menu', 'has', '.raffles-same-height', 'containerClass', 'dropdown', 'rebuild', 'info', 'not', 'animate', 'bottomLevelElementClass', 'section--stretched', '_config', '#menu\x20>\x20li', 'timeout', '.raffles-grid--isotope:not(.raffles-sponsors)', 'raffles-opened', 'html,\x20body', '.raffles-tabs-nav\x20.raffles-tab-link', 'insertAfter', 'MonkeysanTooltip', 'tabs', 'owlUpdateIsotopeParent', '.raffles-simple-slideshow', 'class', 'last', 'build', '.raffles-navigation', 'linear', 'settings', 'isotope', 'responsiveWithSidebar', 'call', 'position:\x20relative;\x20z-index:\x201;', 'leftPlaced', 'month', '.raffles-alert-box--error', 'test', 'aria-expanded', 'toggleBtn', 'none', 'inview', 'removeClass', 'ISFIREFOX', 'alertMessage', 'hours', 'data-active', 'Map', '_getColumnsCount', '.raffles-scroll-nav', 'afterClicked', 'append', 'li\x20a', '.raffles-nav-canvas,\x20.raffles-nav-btn', 'left:\x20', '#raffles-footer', 'ready', 'viewTypes', '.js-videoPoster', 'attr', 'raffles-toggled', 'init', 'min', 'position:\x20absolute;\x20top:\x200;\x20right:\x200;\x20bottom:\x200;\x20left:\x200;\x20z-index:\x202;\x20white-space:\x20nowrap;\x20overflow:\x20hidden;', 'M24.5001\x200.195312C28.6377\x200.196517\x2032.7064\x201.23128\x2036.3202\x203.20144C39.934\x205.1716\x2042.9732\x208.01183\x2045.1493\x2011.4527C47.3254\x2014.8936\x2048.5663\x2018.821\x2048.7544\x2022.8624C48.9425\x2026.9038\x2048.0714\x2030.9252\x2046.2239\x2034.5451C43.0976\x2040.6518\x2027.2513\x2050.2589\x2024.4617\x2061.8072C19.9345\x2050.5984\x205.90263\x2040.6518\x202.7763\x2034.5451C0.928772\x2030.9252\x200.0577348\x2026.9038\x200.24581\x2022.8624C0.433885\x2018.821\x201.67484\x2014.8936\x203.85095\x2011.4527C6.02706\x208.01183\x209.06617\x205.1716\x2012.68\x203.20144C16.2938\x201.23128\x2020.3625\x200.196517\x2024.5001\x200.195312ZM31.1879\x2013.8927C29.2083\x2012.5994\x2026.8809\x2011.9091\x2024.5001\x2011.9091C21.3075\x2011.9091\x2018.2456\x2013.1491\x2015.9881\x2015.3564C13.7306\x2017.5637\x2012.4623\x2020.5575\x2012.4623\x2023.6791C12.4623\x2026.007\x2013.1683\x2028.2826\x2014.4911\x2030.2182C15.8138\x2032.1538\x2017.6938\x2033.6623\x2019.8934\x2034.5532C22.0931\x2035.444\x2024.5135\x2035.6771\x2026.8486\x2035.223C29.1837\x2034.7688\x2031.3286\x2033.6478\x2033.0121\x2032.0018C34.6956\x2030.3557\x2035.8421\x2028.2585\x2036.3066\x2025.9753C36.771\x2023.6922\x2036.5327\x2021.3256\x2035.6216\x2019.1749C34.7104\x2017.0242\x2033.1675\x2015.186\x2031.1879\x2013.8927Z', 'bgColorElementClass', 'appendTo', '.invoker', 'hasBGColorElement', 'fadeOut', 'raffles-filter-opened', 'when', 'fullScreenArea', 'flexbox', 'prepare', '$dropdowns', 'MonkeysanAccordion', '.raffles-header-section--sticky-xl', 'caption', 'fadeOutUp', 'beforeClose', 'resizeDelay', 'rating-bottom-level', '2uggFvT', 'undefined', 'aria-hidden', '.owl-stage-outer', 'bg-image-src', '[data-zoom-image]', 'ISTOUCH', 'outerWidth', 'jQuery', 'revArrowsOutside', '1920123wLkyAR', '.sticky-bar', 'elevateZoom', 'countdown', 'match', 'clickableElements', 'dropdown-element--x-right', '.raffles-alert-box--success', '.raffles-has-sidebar'];
    _0x2801 = function() {
        return _0x14e894;
    }
    ;
    return _0x2801();
}
$(document)['on']('click', _0xb2ab8c(0x23d), function(_0x3fc8db) {
    var _0x4a9601 = _0xb2ab8c;
    _0x3fc8db['preventDefault']();
    var _0x4cb2e2 = $(this)
      , _0x2fab69 = _0x4cb2e2['closest'](_0x4a9601(0x1b3));
    videoPlay(_0x2fab69);
});
function videoPlay(_0x2d5b93) {
    var _0x1cd7da = _0xb2ab8c
      , _0xa720f5 = _0x2d5b93[_0x1cd7da(0x277)]('.js-videoIframe')
      , _0x156d26 = _0xa720f5[_0x1cd7da(0x2b9)](_0x1cd7da(0x203));
    _0x2d5b93[_0x1cd7da(0x1d5)]('videoWrapperActive'),
    _0xa720f5[_0x1cd7da(0x23e)]('src', _0x156d26);
}
$(function() {
    var _0x3f4fda = _0xb2ab8c;
    jQuery('img.svg')[_0x3f4fda(0x1b1)](function() {
        var _0x3eecb2 = _0x3f4fda
          , _0x340023 = jQuery(this)
          , _0x528bee = _0x340023['attr']('id')
          , _0x5ade97 = _0x340023['attr'](_0x3eecb2(0x21b))
          , _0x3cc935 = _0x340023[_0x3eecb2(0x23e)](_0x3eecb2(0x203));
        jQuery[_0x3eecb2(0x1be)](_0x3cc935, function(_0x544b5c) {
            var _0x8fabe3 = _0x3eecb2
              , _0x5e2fce = jQuery(_0x544b5c)[_0x8fabe3(0x277)](_0x8fabe3(0x2bb));
            typeof _0x528bee !== _0x8fabe3(0x257) && (_0x5e2fce = _0x5e2fce['attr']('id', _0x528bee)),
            typeof _0x5ade97 !== _0x8fabe3(0x257) && (_0x5e2fce = _0x5e2fce[_0x8fabe3(0x23e)]('class', _0x5ade97 + _0x8fabe3(0x129))),
            _0x5e2fce = _0x5e2fce[_0x8fabe3(0x305)]('xmlns:a'),
            !_0x5e2fce[_0x8fabe3(0x23e)](_0x8fabe3(0x2d3)) && _0x5e2fce[_0x8fabe3(0x23e)](_0x8fabe3(0x1d1)) && _0x5e2fce[_0x8fabe3(0x23e)]('width') && _0x5e2fce[_0x8fabe3(0x23e)]('viewBox', _0x8fabe3(0x2b0) + _0x5e2fce[_0x8fabe3(0x23e)](_0x8fabe3(0x1d1)) + '\x20' + _0x5e2fce[_0x8fabe3(0x23e)](_0x8fabe3(0x26b))),
            _0x340023[_0x8fabe3(0x273)](_0x5e2fce);
        }, _0x3eecb2(0x2c6));
    });
}),
$(window)['on'](_0xb2ab8c(0x1a7), function() {
    var _0x581212 = _0xb2ab8c;
    $(window)[_0x581212(0x26b)]() > 0x3e0 && $(_0x581212(0x261))[_0x581212(0x184)] && $(_0x581212(0x271))['theiaStickySidebar']({
        'additionalMarginTop': 0xa0,
        'additionalMarginBottom': 0x28
    });
});