@extends('layouts.master')
@section('page_title', 'Article Submission')
@section('main-content')
    <div class="container">
        <div class="inner-wrapper">
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
            <div id="main-content" style="width:auto">
                <div id="main-inner" style="padding-left:10px;">




                    <form name="form1" method="post" action="http://www.localhost/pakjp/article-submission/" id="signupform"
                        enctype="multipart/form-data">
                        <table >
                            <tbody>
                                <tr>
                                    <td height="100"  class="style1" style="padding:10px"> The editor is
                                        inviting scientists in the area of pharmaceutical sciences from
                                        all over the world to submit original articles and/or review articles of
                                        worldwide interest and scientific quality.<br>
                                        <br>
                                        Please read through the <a
                                            href="{{ url('/instructions') }}"
                                            target="_top">Information for Authors</a> before submitting your article. <br>
                                        <br>
                                        Please fill-in the following form:
                                    </td>
                                </tr>
                                <tr>
                                    <td class="style2" style="margin: auto 0;justify-content: center;">
                                        <table style="width: 95%;margin-left: 2em;margin-top:1em;">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="style18" > Submission Type:</td>
                                                    <td class="style10">
                                                        <table id="preferred_contact" border="0"
                                                            style="width:13em;">
                                                            <tbody>
                                                                <tr>
                                                                    <td><input type="radio" name="submission_type"
                                                                            value="Regular" checked="checked">
                                                                        <label for="preferred_contact_0">Regular</label>
                                                                    </td>
                                                                    <td><input type="radio" name="submission_type"
                                                                            value="Fast">
                                                                        <label for="preferred_contact_3">Fast</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="style18" > Title of MS:</td>
                                                    <td class="style9"><input name="title_ms" type="text" id="title_ms"
                                                            
                                                            value="">
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td class="style18" > Name of all authors:</td>
                                                    <td class="style10"><input name="all_authors" type="text"
                                                            id="all_authors"
                                                            value="">
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td class="style18" > E-mail Address:</td>
                                                    <td class="style10"><input name="email" type="email" id="email"
                                                            value="">
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td class="style23" > Attach Undertaking:</td>
                                                    <td class="style24" >
                                                        <input type="file" name="fileUploadUndertaking"
                                                            id="fileUploadUndertaking" style="width:350px;"> <br>
                                                        <a href="{{ url('/uploads/Undertaking-PAKJP.doc') }}"
                                                            target="_blank">Download Undertaking Form</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="style20" > Attachment Article:</td>
                                                    <td class="style21" ><input type="file"
                                                            name="fileUploadArticle" id="fileUploadArticle"
                                                            style="width:350px;"></td>
                                                </tr>

                                                <tr>
                                                    <td class="style5" >
                                                        <div class="g-recaptcha"
                                                            data-sitekey="6LcA8CQfAAAAAANWauuWWSNQkuz9g7Z_JySR0_cy">
                                                            <div style="width: 304px; height: 78px;">
                                                                <div><iframe title="reCAPTCHA" width="304" height="78"
                                                                        role="presentation" name="a-b4bt9ize4zqs"
                                                                        frameborder="0" scrolling="no"
                                                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcA8CQfAAAAAANWauuWWSNQkuz9g7Z_JySR0_cy&amp;co=aHR0cDovL3d3dy5sb2NhbGhvc3Q6ODA.&amp;hl=en&amp;v=pPK749sccDmVW_9DSeTMVvh2&amp;size=normal&amp;cb=vk107kiin9v"></iframe>
                                                                </div>
                                                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                            </div><iframe style="display: none;"></iframe>
                                                        </div>
                                                    </td>
                                                    <td class="style22" ><input type="submit"
                                                            name="Button1" value="Submit" id="Button1"
                                                            fdprocessedid="8asqxk"></td>
                                                    <input type="hidden" name="submitted">
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                </div>
            </div>

        </div><!-- .inner-wrapper -->
    </div>
@endsection
