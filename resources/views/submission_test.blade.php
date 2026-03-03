@extends('layouts.master')
@section('page_title', 'Article Submission')
@section('main-content')
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<!-- <script src='https://www.google.com/recaptcha/api.js' async defer ></script> -->
<!--       <script src="https://www.google.com/recaptcha/api.js?render=6LcPAM8eAAAAAFmBDgvvKTGD2cbd3H3T4YrGqQU2"></script> -->
<div id="main-content" style="width:auto">
    <div id="main-inner" style="padding-left:10px;">
            <form name="form1" method="post" action="" id="signupform" enctype="multipart/form-data" >
				<table align="center" style="width: height: 499px;">
                <tbody>
                    <tr>
                        <td height="100" valign="top" class="style1" style="padding:10px"> The editor is inviting scientists in the area of pharmaceutical sciences from 
                            all over the world to submit original articles and/or review articles of 
                            worldwide interest and scientific quality.<br>
                            <br>
                            Please read through the <a href="" target="_top">Information for Authors</a> before submitting your article. <br>
                            <br>
                            Please fill-in the following form:</td>
                        <td width="135" rowspan="2" align="center" valign="middle" class="style3"></td>
                    </tr>
                    <tr>
                        <td height="606" valign="top" class="style2"><table bgcolor="#E4E4E4" style="width: 99%; height: 387px;padding:10px 15px;border-radius:7px;">
                                <tbody>
                                    <tr><td colspan="2"><?php
                                            if (!empty($errors)) {
                                                echo "<p style='color:red; font-weight:bold;'>Following Error(s) Occured<br />";
                                                foreach ($errors as $error) {
                                                    echo "$error<br />";
                                                }
                                                echo "</p>";
                                            } else if ($is_mail_sent) {
                                                echo "<p style='color:green; font-weight:bold;'>Your paper has been submitted successfully!<p />";
                                            }
                                            ?>
                                        </td></tr>
                                    <tr>
                                        <td class="style18" valign="top"> Submission Type:</td>
										<td class="style10"><table id="preferred_contact" border="0" style="height:18px;width:200px;">
                                                <tbody>
                                                    <tr>
                                                        <td><input  type="radio" name="submission_type" value="Regular" checked="checked"/>
                                                            <label for="preferred_contact_0">Regular</label></td>
                                                        <td><input  type="radio" name="submission_type" value="Fast"/>
                                                            <label for="preferred_contact_3">Fast</label></td>
                                                    </tr>
                                                </tbody>
                                            </table>
										</td>
                                    </tr>
                                    <tr>
                                        <td class="style18" valign="top"> Title of MS:</td>
                                        <td class="style9"><input name="title_ms" type="text" id="title_ms" style="width:240px;" value="<?php echo $_POST['title_ms'] ?>" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td class="style18" valign="top"> Name of all authors:</td>
                                        <td class="style10"><input name="all_authors" type="text" id="all_authors" value="<?php echo $_POST['all_authors'] ?>" style="width:240px;"/></td>
                                    </tr>
                                   
                                    <tr>
                                        <td class="style23" valign="top"> Attach Undertaking:</td>
                                        <td class="style24" valign="top">  <input type="file" name="fileUploadUndertaking" id="fileUploadUndertaking" style="width:350px;"> &nbsp;&nbsp;
                                            <a href="http://www.pjps.pk/Undertaking-PJPS.doc" target="_blank">Download Undertaking Form</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="style20" valign="top"> Attachment Article:</td>
                                        <td class="style21" valign="top"><input type="file" name="fileUploadArticle" id="fileUploadArticle" style="width:350px;"></td>
                                    </tr>
                                    <tr>
                                        <td width = "100%"></td>
                                        <td align="left"width="100%">
                                        </td>
                                    </tr>
									
                                    <tr>
                                        <td class="style5" valign="top">
											<div class="g-recaptcha" data-sitekey="6LclbdAeAAAAAL1mjW0TbYXXt0WPMpE3irlNVrwS"></div>
										</td>
										
                                        <td class="style22" valign="top">
											<input type="submit" name="Button1" value="Submit" id="Button1">
                                        </td>
                                <input type="hidden" name="submitted" />
                            </tr>
								
                        </tbody>
        </table>    </td>
        </tr>
        </tbody>	
        </table>
				
		</form>
    </div>
</div>
@endsection
