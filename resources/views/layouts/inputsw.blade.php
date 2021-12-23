@extends('layouts.master2')

@section('content')

         

          <!-- NEW ARTICLE -->

          <script type="text/javascript">
    
            (function(e, t) {
              "function" == typeof define && define.amd ? define(t) : e.H5F = t()
            })(this, function() {
              var e, t, a, i, n, r, s, l, u, o, c, d, v, f, p, m, h, g, b, y, w, C, N, A, E, $, k = document,
                x = k.createElement("input"),
                q = /^[a-zA-Z0-9.!#$%&'*+-\/=?\^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
                M = /[a-z][\-\.+a-z]*:\/\//i,
                L = /^(input|select|textarea)$/i;
              return r = function(e, t) {
                var a = !e.nodeType || !1,
                  i = {
                    validClass: "valid",
                    invalidClass: "error",
                    requiredClass: "required",
                    placeholderClass: "placeholder"
                  };
                if ("object" == typeof t)
                  for (var r in i) t[r] === void 0 && (t[r] = i[r]);
                if (n = t || i, a)
                  for (var l = 0, u = e.length; u > l; l++) s(e[l]);
                else s(e)
              }, s = function(a) {
                var i, n = a.elements,
                  r = n.length,
                  s = !!a.attributes.novalidate;
                if (b(a, "invalid", u, !0), b(a, "blur", u, !0), b(a, "input", u, !0), b(a, "keyup", u, !0), b(a, "focus", u, !0), b(a, "change", u, !0), b(a, "click", o, !0), b(a, "submit", function(i) {
                    e = !0, t || s || a.checkValidity() || w(i)
                  }, !1), !v())
                  for (a.checkValidity = function() {
                      return c(a)
                    }; r--;) i = !!n[r].attributes.required, "fieldset" !== n[r].nodeName.toLowerCase() && l(n[r])
              }, l = function(e) {
                var t = e,
                  a = g(t),
                  n = {
                    type: t.getAttribute("type"),
                    pattern: t.getAttribute("pattern"),
                    placeholder: t.getAttribute("placeholder")
                  },
                  r = /^(email|url)$/i,
                  s = /^(input|keyup)$/i,
                  l = r.test(n.type) ? n.type : n.pattern ? n.pattern : !1,
                  u = f(t, l),
                  o = m(t, "step"),
                  v = m(t, "min"),
                  h = m(t, "max"),
                  b = !("" === t.validationMessage || void 0 === t.validationMessage);
                t.checkValidity = function() {
                  return c.call(this, t)
                }, t.setCustomValidity = function(e) {
                  d.call(t, e)
                }, t.validity = {
                  valueMissing: a,
                  patternMismatch: u,
                  rangeUnderflow: v,
                  rangeOverflow: h,
                  stepMismatch: o,
                  customError: b,
                  valid: !(a || u || o || v || h || b)
                }, n.placeholder && !s.test(i) && p(t)
              }, u = function(e) {
                var t = C(e) || e,
                  a = /^(input|keyup|focusin|focus|change)$/i,
                  r = /^(submit|image|button|reset)$/i,
                  s = /^(checkbox|radio)$/i,
                  o = !0;
                !L.test(t.nodeName) || r.test(t.type) || r.test(t.nodeName) || (i = e.type, v() || l(t), t.validity.valid && ("" !== t.value || s.test(t.type)) || t.value !== t.getAttribute("placeholder") && t.validity.valid ? (A(t, [n.invalidClass, n.requiredClass]), N(t, n.validClass)) : a.test(i) ? t.validity.valueMissing && A(t, [n.requiredClass, n.invalidClass, n.validClass]) : t.validity.valueMissing ? (A(t, [n.invalidClass, n.validClass]), N(t, n.requiredClass)) : t.validity.valid || (A(t, [n.validClass, n.requiredClass]), N(t, n.invalidClass)), "input" === i && o && (y(t.form, "keyup", u, !0), o = !1))
              }, c = function(t) {
                var a, i, n, r, s = !1;
                if ("form" === t.nodeName.toLowerCase()) {
                  a = t.elements;
                  for (var l = 0, o = a.length; o > l; l++) i = a[l], n = !!i.attributes.required, r = !!i.attributes.pattern, "fieldset" !== i.nodeName.toLowerCase() && (n || r && n) && (u(i), i.validity.valid || s || (e && i.focus(), s = !0));
                  return !s
                }
                return u(t), t.validity.valid
              }, d = function(e) {
                var t = this;
                t.validationMessage = e
              }, o = function(e) {
                var a = C(e);
                a.attributes.formnovalidate && "submit" === a.type && (t = !0)
              }, v = function() {
                return E(x, "validity") && E(x, "checkValidity")
              }, f = function(e, t) {
                if ("email" === t) return !q.test(e.value);
                if ("url" === t) return !M.test(e.value);
                if (t) {
                  var i = e.getAttribute("placeholder"),
                    n = e.value;
                  return a = RegExp("^(?:" + t + ")$"), n === i ? !1 : "" === n ? !1 : !a.test(e.value)
                }
                return !1
              }, p = function(e) {
                var t = {
                    placeholder: e.getAttribute("placeholder")
                  },
                  a = /^(focus|focusin|submit)$/i,
                  r = /^(input|textarea)$/i,
                  s = /^password$/i,
                  l = !!("placeholder" in x);
                l || !r.test(e.nodeName) || s.test(e.type) || ("" !== e.value || a.test(i) ? e.value === t.placeholder && a.test(i) && (e.value = "", A(e, n.placeholderClass)) : (e.value = t.placeholder, b(e.form, "submit", function() {
                  i = "submit", p(e)
                }, !0), N(e, n.placeholderClass)))
              }, m = function(e, t) {
                var a = parseInt(e.getAttribute("min"), 10) || 0,
                  i = parseInt(e.getAttribute("max"), 10) || !1,
                  n = parseInt(e.getAttribute("step"), 10) || 1,
                  r = parseInt(e.value, 10),
                  s = (r - a) % n;
                return g(e) || isNaN(r) ? "number" === e.getAttribute("type") ? !0 : !1 : "step" === t ? e.getAttribute("step") ? 0 !== s : !1 : "min" === t ? e.getAttribute("min") ? a > r : !1 : "max" === t ? e.getAttribute("max") ? r > i : !1 : void 0
              }, h = function(e) {
                var t = !!e.attributes.required;
                return t ? g(e) : !1
              }, g = function(e) {
                var t = e.getAttribute("placeholder"),
                  a = /^(checkbox|radio)$/i,
                  i = !!e.attributes.required;
                return !(!i || "" !== e.value && e.value !== t && (!a.test(e.type) || $(e)))
              }, b = function(e, t, a, i) {
                E(window, "addEventListener") ? e.addEventListener(t, a, i) : E(window, "attachEvent") && window.event !== void 0 && ("blur" === t ? t = "focusout" : "focus" === t && (t = "focusin"), e.attachEvent("on" + t, a))
              }, y = function(e, t, a, i) {
                E(window, "removeEventListener") ? e.removeEventListener(t, a, i) : E(window, "detachEvent") && window.event !== void 0 && e.detachEvent("on" + t, a)
              }, w = function(e) {
                e = e || window.event, e.stopPropagation && e.preventDefault ? (e.stopPropagation(), e.preventDefault()) : (e.cancelBubble = !0, e.returnValue = !1)
              }, C = function(e) {
                return e = e || window.event, e.target || e.srcElement
              }, N = function(e, t) {
                var a;
                e.className ? (a = RegExp("(^|\\s)" + t + "(\\s|$)"), a.test(e.className) || (e.className += " " + t)) : e.className = t
              }, A = function(e, t) {
                var a, i, n = "object" == typeof t ? t.length : 1,
                  r = n;
                if (e.className)
                  if (e.className === t) e.className = "";
                  else
                    for (; n--;) a = RegExp("(^|\\s)" + (r > 1 ? t[n] : t) + "(\\s|$)"), i = e.className.match(a), i && 3 === i.length && (e.className = e.className.replace(a, i[1] && i[2] ? " " : ""))
              }, E = function(e, t) {
                var a = typeof e[t],
                  i = RegExp("^function|object$", "i");
                return !!(i.test(a) && e[t] || "unknown" === a)
              }, $ = function(e) {
                for (var t = document.getElementsByName(e.name), a = 0; t.length > a; a++)
                  if (t[a].checked) return !0;
                return !1
              }, {
                setup: r
              }
            });
          </script>
          <link rel="alternate" type="text/xml+oembed" href="https://docs.google.com/a/llumc.org/forms/d/1GU_DssDnMbTLIxz5XSvmCn5G84z6lHX60xfZGGIZ0KE/oembed?url=https://docs.google.com/a/llumc.org/forms/d/1GU_DssDnMbTLIxz5XSvmCn5G84z6lHX60xfZGGIZ0KE/viewform&amp;format=xml">
          <meta property="og:title" content="General Fund Gift - 2015">
          <meta property="og:type" content="article">
          <meta property="og:site_name" content="Google Docs">
          <meta property="og:url" content="https://docs.google.com/a/llumc.org/forms/d/1GU_DssDnMbTLIxz5XSvmCn5G84z6lHX60xfZGGIZ0KE/viewform">
          <meta property="og:image" content="https://ssl.gstatic.com/docs/forms/social/social-forms.png">
          <meta property="og:image:width" content="90">
          <meta property="og:image:height" content="90">
        </head>
        
        <body dir="ltr" class="ss-base-body">
          <div itemscope itemtype="http://schema.org/CreativeWork/FormObject">
            <meta itemprop="name" content="General Fund Gift - 2015">
        
            <meta itemprop="url" content="https://docs.google.com/a/llumc.org/forms/d/1GU_DssDnMbTLIxz5XSvmCn5G84z6lHX60xfZGGIZ0KE/viewform">
            <meta itemprop="embedUrl" content="https://docs.google.com/a/llumc.org/forms/d/1GU_DssDnMbTLIxz5XSvmCn5G84z6lHX60xfZGGIZ0KE/viewform?embedded=true">
            <meta itemprop="faviconUrl" content="https://ssl.gstatic.com/docs/spreadsheets/forms/favicon_jfk2.png">
        
            <div class="ss-form-container">
        
              <div class="ss-header-image-container">
                <div class="ss-header-image-image">
                  <div class="ss-header-image-sizer"></div>
                </div>
              </div>
              <div class="ss-top-of-page">
                <div class="ss-form-heading">

                  <!--Alert-->
                  <div class="alert alert-danger" role="alert">
                    This form is not active yet
                  </div>

                  <h1 class="ss-form-title" dir="ltr">#SuaraWanita</h1>
                  <h1 class="ss-form-title" dir="ltr">KIRIMKAN CERITAMU !</h1>
        
        
                  <div class="ss-required-asterisk" aria-hidden="true">* Required</div>
                </div>
              </div>
              <div class="ss-form">
                <form action="https://docs.google.com/forms/d/1GU_DssDnMbTLIxz5XSvmCn5G84z6lHX60xfZGGIZ0KE/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
                  <ol role="list" class="ss-question-list" style="padding-left: 0">
                    <div class="ss-form-question errorbox-good" role="listitem">
                      <div dir="ltr" class="ss-item ss-item-required ss-text">
                        <div class="ss-form-entry">
                          <label class="ss-q-item-label" for="entry_277621092">
                            <h6>Terima kasih karena kamu telah memercayakan kami untuk mendengarkan ceritamu. Kami turut prihatin hal tersebut pernah terjadi dalam hidupmu. Namun, kami ingin kamu tahu bahwa kami ada di sini untuk mendengar ceritamu.</h6>
                            
                            <h6>Sebelum menulis cerita Anda, kami ingin mengingatkan Anda bahwa Anda dapat memilih di antara dua opsi. Jika Anda memilih untuk memposting itu berarti cerita Anda kemungkinan  akan digunakan dalam proyek Suara Wanita yang akan datang, tetapi jika tidak, kami hanya akan mendengarkan dan menyimpan cerita Anda tanpa mempostingnya.</h6>
                            <br>
                            <h6>Ceritamu akan dipublikasikan secara anonim sehingga kamu tidak perlu menuliskan identitasmu di sini. Terima kasih atas keberanianmu.</h6>
                            <br>
        
                      </div>
                    </div>
                    <div class="ss-form-question errorbox-good" role="listitem">
                      <div dir="ltr" class="ss-item ss-item-required ss-radio">
                        <div class="ss-form-entry">
                          <label class="ss-q-item-label" for="entry_819064029">
                            <div class="ss-q-title">Apakah kamu ingin ceritamu dipublikasikan?
                              <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                              <span class="ss-required-asterisk">*</span>
                            </div>
                          </label>
        
                          <ul class="ss-choices" role="radiogroup" aria-label="Frequency I/we will pay: ">
                            <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.849678524" value="Monthly" id="group_849678524_1" role="radio" class="ss-q-radio" aria-label="Monthly" required="" aria-required="true"></span>
                                <span class="ss-choice-label">Dipublikasikan</span>
                              </label></li>
                            <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.849678524" value="Weekly" id="group_849678524_2" role="radio" class="ss-q-radio" aria-label="Weekly" required="" aria-required="true"></span>
                                <span class="ss-choice-label">Tidak dipublikasikan</span>
                              </label></li>
                          </ul>
        
                          <div class="ss-form-question errorbox-good" role="listitem">
                      <div dir="ltr" class="ss-item ss-item-required ss-radio">
                        <div class="ss-form-entry">
                          <label class="ss-q-item-label" for="entry_819064029">
                            <div class="ss-q-title">Apakah kejadian tersebut terjadi saat pandemi Covid-19?
                              <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                              <span class="ss-required-asterisk">*</span>
                            </div>
                          </label>
        
                          <ul class="ss-choices" role="radiogroup" aria-label="Frequency I/we will pay: ">
                            <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.849678524" value="Monthly" id="group_849678524_1" role="radio" class="ss-q-radio" aria-label="Monthly" required="" aria-required="true"></span>
                                <span class="ss-choice-label">Iya, ini terjadi saat pandemi</span>
                              </label></li>
                            <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.849678524" value="Weekly" id="group_849678524_2" role="radio" class="ss-q-radio" aria-label="Weekly" required="" aria-required="true"></span>
                                <span class="ss-choice-label">Tidak, ini terjadi sebelum pandemi</span>
                              </label></li>
                          </ul>
                          <div class="error-message" id="819064029_errorMessage"></div>
                          <div class="required-message">This is a required question</div>
                        </div>
                      </div>
                    </div>
                    <div class="box">
                    <div class="errorbox-good" role="listitem">
                      <div dir="ltr" class="ss-item  ss-section-header">
                        <div class="ss-form-entry">
                          <div class="ss-section-description ss-no-ignore-whitespace write">Jenis KBG apa yang kamu alami?
                          </div>
        
                        </div>
                      </div>
                    </div>
                    <div class="ministry-container">
                      <div class="ss-form-question errorbox-good float-left" role="listitem">
                        <div dir="ltr" class="ss-item  ss-select">
                          <div class="ss-form-entry">
                            <label class="ss-q-item-label" for="entry_1983670096">
                              <div class="ss-q-title">KBG
                              </div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                            </label>
                            <select name="entry.1983670096" id="entry_1983670096" aria-label="Ministry 1  ">
                              <option value=""></option>
                              <option value="KS">Kekerasan Seksual</option>
                              <option value="RP">Kekerasan Ranah Personal (RP)</option>
                              <option value="KBGD">Kekerasan Gender Berbasis Online (KBGD)</option>
                              <option value="KDRT">Kekerasan Dalam Rumah Tangga (KDRT)</option>
                              <option value="KL">Kisah Lainnya</option>
                            </select>
                            <div class="required-message">This is a required question</div>
                          </div>
                        </div>
                      </div>
                      </div>
                      
                      </div>
                  
                    </div>
                    <div class="ss-form-question errorbox-good" role="listitem">
                      <div dir="ltr" class="ss-item ss-item-required ss-text">
                        <div class="ss-form-entry">
                          <label class="ss-q-item-label" for="entry_1096400001">
                            <div class="ss-q-title">Umur kalian ketika kejadian ini terjadi
                              <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                              <span class="ss-required-asterisk">*</span>
                            </div>
                            <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                          </label>
                          <input type="text" name="entry.1096400001" value="" class="ss-q-short" id="entry_1096400001" dir="auto" aria-label="Name  " aria-required="true" required="" title="">
                          <div class="error-message" id="1025415145_errorMessage"></div>
                          <div class="required-message">This is a required question</div>
                        </div>
                      </div>
                    </div>
        
                     <div class="ss-form-question errorbox-good" role="listitem">
                      <div dir="ltr" class="ss-item ss-item-required ss-text">
                        <div class="ss-form-entry">
                          <label class="ss-q-item-label" for="entry_1096400001">
                            <div class="ss-q-title">Dari mana kamu berasal? (Domisili)
                              <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                              <span class="ss-required-asterisk">*</span>
                            </div>
                            <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                          </label>
                          <input type="text" name="entry.1096400001" value="" class="ss-q-short" id="entry_1096400001" dir="auto" aria-label="Name  " aria-required="true" required="" title="">
                          <div class="error-message" id="1025415145_errorMessage"></div>
                          <div class="required-message">This is a required question</div>
                        </div>
                      </div>
                    </div>
        
                    <div class="ss-form-question errorbox-good" role="listitem">
                      <div dir="ltr" class="ss-item ss-item-required ss-paragraph-text">
                        <div class="ss-form-entry">
                          <label class="ss-q-item-label" for="entry_290699332">
                            <div class="ss-q-title">Yuk tuliskan kisah kamu di sini
                              <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                              <span class="ss-required-asterisk">*</span>
                            </div>
                          </label>
                          <textarea name="entry.290699332" rows="8" cols="0" class="ss-q-long" id="entry_290699332" dir="auto" aria-label="Address Street, City, State, Zip " aria-required="true" required=""></textarea>
                          <div class="error-message" id="1414499817_errorMessage"></div>
                          <div class="required-message">This is a required question</div>
                        </div>
                      </div>
                    </div>
          
                    <input type="hidden" name="draftResponse" value="[,,&quot;4400090883395815708&quot;]">
                    <input type="hidden" name="pageHistory" value="0">
        
                    <input type="hidden" name="fbzx" value="4400090883395815708">
        
                    <div class="ss-item ss-navigate">
                      <table id="navigation-table">
                        <tbody>
                          <tr>
                            <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
                              <input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
                              <div class="ss-password-warning ss-secondary-text">Never submit passwords through Google Forms.</div>              
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </ol>
                </form>
              </div>
              <div class="ss-footer">
                <div class="ss-attribution"></div>
                <div class="ss-legal">
                  <div class="disclaimer-separator"></div>
                  <div class="disclaimer" dir="ltr">
                    <div class="powered-by-logo"><span class="powered-by-text">Powered by Sisterhoods IDN</span>
                      <a href="https://www.google.com/forms/about?utm_source=product&amp;utm_medium=forms_logo&amp;utm_campaign=form">
                        <div class="ss-logo-container ss-logo-css-container">
                          <div class="ss-logo-image"></div>
                          <span class="aria-only-help">Google Forms</span>
                        </div>
                      </a>
                    </div>
                      <br>
        
                     <br>
                      <a href="mailto:sisterhoods.idn@gmail.com">Email</a>
                      -
                      <a href="https://www.instagram.com/sisterhoods.idn/" target="_blank">Instagram</a>
                      -
                      <a href="https://www.linkedin.com/company/sisterhoods/mycompany/"
                              target="_blank">LinkedIn</a>
                    </div>
                  </div>
                </div>
              </div>           
              
        
        
        
              <div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic></div>
            </div>
        
              <div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic></div>
            </div>
        
            <script type='text/javascript' src='/static/forms/client/js/2234242027-formviewer_prd.js'></script>
            <script type="text/javascript">
              H5F.setup(document.getElementById('ss-form'));
              _initFormViewer(
                "[100,,[[[277621092,[[1,1,[\x220\x22]\n,\x22Please enter a valid amount\x22]\n]\n]\n,[1365406766,[[1,1,[\x220\x22]\n,\x22\x22]\n]\n]\n,[1937779465,[[1,1,[\x220\x22]\n,\x22\x22]\n]\n]\n,[1798042910,[[1,1,[\x220\x22]\n,\x22\x22]\n]\n]\n,[1076296165,[[1,1,[\x220\x22]\n,\x22\x22]\n]\n]\n,[1813579721,[[4,299,[\x22\x22]\n,\x22\x22]\n]\n]\n]\n]\n]\n");
            </script>
          </div>
        
@endsection