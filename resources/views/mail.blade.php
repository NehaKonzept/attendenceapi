<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
        xmlns="http://www.w3.org/1999/xhtml" style="background-color: rgb(240, 240, 240);">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <style type="text/css"> /* GT AMERICA */
        @font-face {
            font-display: fallback;
            font-family: 'GT America Regular';
            font-weight: 400;
            src: url('https://www.exploretock.com/fonts/gt-america/GT-America-Standard-Regular.woff2') format('woff2'), url('https://www.exploretock.com/fonts/gt-america/GT-America-Standard-Regular.woff') format('woff'), url('https://www.exploretock.com/fonts/gt-america/GT-America-Standard-Regular.ttf') format('truetype');
        }

        @font-face {
            font-display: fallback;
            font-family: 'GT America Medium';
            font-weight: 600;
            src: url('https://www.exploretock.com/fonts/gt-america/GT-America-Standard-Medium.woff2') format('woff2'), url('https://www.exploretock.com/fonts/gt-america/GT-America-Standard-Medium.woff') format('woff'), url('https://www.exploretock.com/fonts/gt-america/GT-America-Standard-Medium.ttf') format('truetype');
        }

        @font-face {
            font-display: fallback;
            font-family: 'GT America Condensed Bold';
            font-weight: 700;
            src: url('https://www.exploretock.com/fonts/gt-america/GT-America-Condensed-Bold.woff2') format('woff2'), url('https://www.exploretock.com/fonts/gt-america/GT-America-Condensed-Bold.woff') format('woff'), url('https://www.exploretock.com/fonts/gt-america/GT-America-Condensed-Bold.ttf') format('truetype');
        }

        /* CLIENT-SPECIFIC RESET */
        body, table, td, a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        /* Prevent WebKit and Windows mobile changing default text sizes */
        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        /* Remove spacing between tables in Outlook 2007 and up */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* Allow smoother rendering of resized image in Internet Explorer */
        .im {
            color: inherit !important;
        }

        /* DEVICE-SPECIFIC RESET */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* iOS BLUE LINKS */ /* RESET */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            display: block;
        }

        table {
            border-collapse: collapse;
        }

        table td {
            border-collapse: collapse;
            display: table-cell;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* BG COLORS */
        .mainTable {
            background-color: #3d3b3b;
        }

        html {
            background-color: #403d3d;
        }

        /* VARIABLES */
        .bg-white {
            background-color: #494646;
        }

        .hr { /* Cross-client horizontal rule. Adapted from https://litmus.com/community/discussions/4633-is-there-a-reliable-1px-horizontal-rule-method */
            background-color: #4f524b;
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            mso-line-height-rule: exactly;
            line-height: 1px;
        }

        /* TYPOGRAPHY */
        body {
            font-family: 'GT America Regular', 'Roboto', 'Helvetica', 'Arial', sans-serif;
            font-weight: 400;
            color: #4f4f65;
            -webkit-font-smoothing: antialiased;
            -ms-text-size-adjust: 100%;
            -moz-osx-font-smoothing: grayscale;
            font-smoothing: always;
            text-rendering: optimizeLegibility;
        }

        .h1 {
            font-family: 'GT America Condensed Bold', 'Roboto Condensed', 'Roboto', 'Helvetica', 'Arial', sans-serif;
            font-weight: 700;
            vertical-align: middle;
            font-size: 36px;
            line-height: 42px;
        }

        .text {
            font-family: 'GT America Regular', 'Roboto', 'Helvetica', 'Arial', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 21px;
        }

        .text-xsmall {
            font-family: 'GT America Regular', 'Roboto', 'Helvetica', 'Arial', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            line-height: 22px;
            letter-spacing: 1px;
        }

        /* FONT COLORS */
        .textColorDark {
            color: #23233e;
        }

        .textColorNormal {
            color: #4f4f65;
        }

        /* BUTTON */
        .Button-primary-wrapper {
            border-radius: 3px;
            /*background-color: #2020C0;*/
        }

        .Button-primary {
            font-family: 'GT America Medium', 'Roboto', 'Helvetica', 'Arial', sans-serif;
            border-radius: 3px;
            /*border: 1px solid #2020C0;*/
            color: #ffffff;
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 18px;
            text-decoration: none;
        }

        /* LAYOUT */
        .Content-container {
            padding-left: 60px;
            padding-right: 60px;
        }

        .Content-container--main {
            padding-top: 54px;
            padding-bottom: 60px;
        }

        .Content {
            width: 580px;
            margin: 0 auto;
        }

        /* HEADER */
        .header-tockLogoImage {
            display: block;
            color: #F0F0F0;
        }

        /* PREHEADER */
        .preheader {
            display: none;
            font-size: 1px;
            color: #FFFFFF;
            line-height: 1px;
            max-height: 0px;
            max-width: 0px;
            opacity: 0;
            overflow: hidden;
        }

        .feedback-link img {
            height: 50px;
            width: 50px;
        }

        /* TABLET STYLES */
        @media screen and (max-width: 648px) {
            /* DEVICE-SPECIFIC RESET */
            div[style*='margin: 16px 0;'] {
                margin: 0 !important;
            }

            /* ANDROID CENTER FIX */
            /* LAYOUT */
            .Content {
                width: 90% !important;
            }

            .Content-container {
                padding-left: 36px !important;
                padding-right: 36px !important;
            }

            .Content-container--main {
                padding-top: 30px !important;
                padding-bottom: 42px !important;
            }

            /* FEEDBACK LINK */
            .feedback-link img {
                height: 38px !important;
                width: 38px !important;
            }
        }

        /* MOBILE STYLES */
        @media screen and (max-width: 480px) {
            /* TYPOGRAPHY */
            .h1 {
                font-size: 30px !important;
                line-height: 30px !important;
            }

            .text {
                font-size: 16px !important;
                line-height: 22px !important;
            }

            /* LAYOUT */
            .Content {
                width: 100% !important;
            }

            .Content-container {
                padding-left: 18px !important;
                padding-right: 18px !important;
            }

            .Content-container--main {
                padding-top: 24px !important;
                padding-bottom: 30px !important;
            }

            .header {
                padding: 0 18px !important;
            }
        } </style>
</head>
<body
        style="margin: 0 !important; padding: 0 !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; height: 100%; margin: 0; padding: 0; width: 100%; font-family: 'GT America Regular', 'Roboto', 'Helvetica', 'Arial', sans-serif; font-weight: 400; color: rgb(79, 79, 101); -webkit-font-smoothing: antialiased; -ms-text-size-adjust: 100%; -moz-osx-font-smoothing: grayscale; font-smoothing: always; text-rendering: optimizeLegibility;">
<!-- EXTRA METADATA MARKUP -->
<!--[if mso]>
<style type="text/css">
    .h1 {
        font-family: 'Helvetica', 'Arial', sans-serif !important;
        font-weight: 700 !important;
        vertical-align: middle !important;
        font-size: 36px !important;
        mso-line-height-rule: exactly;
        line-height: 42px !important;
    }

    .text {
        font-family: 'Helvetica', 'Arial', sans-serif !important;
        font-weight: 400 !important;
        font-size: 16px !important;
        mso-line-height-rule: exactly;
        line-height: 21px !important;
    }

    .text-xsmall {
        font-family: 'Helvetica', 'Arial', sans-serif !important;
        font-size: 11px !important;
        text-transform: uppercase !important;
        mso-line-height-rule: exactly;
        line-height: 22px !important;
        letter-spacing: 1px !important;
    }

    .textColorDark {
        color: #23233e !important;
    }

    .textColorNormal {
        color: #4f4f65 !important;
    }

    .Button-primary {
        font-family: 'Helvetica', 'Arial', sans-serif !important;
        border-radius: 3px !important;
        /*border: 1px solid #2020C0 !important;*/
        color: #ffffff !important;
        display: block !important;
        font-size: 16px !important;
        font-weight: 600 !important;
        padding: 18px !important;
        text-decoration: none !important;
    }
</style>
<![endif]-->
<!-- HIDDEN PREHEADER TEXT -->
<div class="preheader"
     style="display: none; font-size: 1px; color: rgb(255, 255, 255); line-height: 1px; max-height: 0; max-width: 0; opacity: 0; overflow: hidden;"></div>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class=" mainTable  "
       style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; background-color: rgb(240, 240, 240);">
    <!-- HEADER -->
    <tr>
        <td align="center" class="header"
            style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="Content"
                   style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; width: 580px; margin: 0 auto;">
                <tr class="spacer">
                    <td height="12px" colspan="2"
                        style="font-size: 12px; line-height:12px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                        &nbsp;
                    </td>
                </tr>
                <tr class="spacer">
                    <td height="12px" colspan="2"
                        style="font-size: 12px; line-height:12px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="middle"
                        style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;"></td>
                </tr>
                <tr class="spacer">
                    <td height="12px" colspan="2"
                        style="font-size: 12px; line-height:12px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                        &nbsp;
                    </td>
                </tr>
                <tr class="spacer">
                    <td height="12px" colspan="2"
                        style="font-size: 12px; line-height:12px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                        &nbsp;
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- CONTENT -->
    <tr>
        <td align="center"
            style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="Content bg-white"
                   style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; background-color: white; width: 580px; margin: 0 auto;">
                <tr>
                    <td class="Content-container Content-container--main text textColorNormal"
                        style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell; font-family: 'GT America Regular', 'Roboto', 'Helvetica', 'Arial', sans-serif; font-weight: 400; font-size: 16px; line-height: 21px; color: rgb(79, 79, 101); padding-left: 60px; padding-right: 60px; padding-top: 54px; padding-bottom: 60px;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                               style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse;">
                            <tr>
                                <td valign="top" align="left"
                                    style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                           style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse;">
                                        <tr>
                                            <td align="center"
                                                style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;padding-bottom:5%">
{{--                                                <img src="public/logo.svg" alt=""--}}
{{--                                                     style="width:30%">--}}
{{--                                                <img src={{url('public/logo.svg')}} alt=""--}}
{{--                                                     style="width:30%">--}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
																			<span class="h1 textColorDark"
                                                                                  style="font-family: 'GT America Condensed Bold', 'Roboto Condensed', 'Roboto', 'Helvetica', 'Arial', sans-serif; font-weight: 700; vertical-align: middle; font-size: 36px; line-height: 42px; color: rgb(35, 35, 62);">Token Verification Code For Reset Password!</span>
                                            </td>
                                        </tr>
                                        <tr class="spacer">
                                            <td height="18px" colspan="2"
                                                style="font-size: 18px; line-height:18px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" valign="top" width="100%" height="1" class="hr"
                                                style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell; background-color: rgb(211, 211, 216); border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 1px;">
                                                <!--[if gte mso 15]>&nbsp;
                                                <![endif]-->
                                            </td>
                                        </tr>
                                        <tr class="spacer">
                                            <td height="18px" colspan="2"
                                                style="font-size: 18px; line-height:18px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" align="left"
                                    style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                           style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse;">
                                        <tr>
                                            <td align="left" class="text textColorNormal"
                                                style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell; font-family: 'GT America Regular', 'Roboto', 'Helvetica', 'Arial', sans-serif; font-weight: 400; font-size: 16px; line-height: 21px; color: rgb(79, 79, 101);">
                                                We understand you'd like to change your password. Just Copy the below <b
                                                        style="color: red">CODE</b>.
                                                <br>
                                                <br>
                                                <br>
                                                Your Code &nbsp;<span
                                                        style="color: #ff0303; font-size: xx-large">{{$link}}</span>
                                                <br>
                                               

                                                <br>
                                                If you did not ask for a password change, just ignore this email.
                                                <br>
                                                <br>
                                                Thanks,
                                                <br> The Online Chemist Team
                                            </td>
                                        </tr>
                                        <tr class="spacer">
                                            <td height="12px" colspan="2"
                                                style="font-size: 12px; line-height:12px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr class="spacer">
                                            <td height="12px" colspan="2"
                                                style="font-size: 12px; line-height:12px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; display: table-cell;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <h5 style="color: darkgreen">This message was mailed to {{$user->email}} by The Online Chemist Team.</h5>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>

