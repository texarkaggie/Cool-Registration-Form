<?php
/**
 * Created by PhpStorm.
 * User: JD
 * Date: 5/3/2017
 * Time: 9:11 AM
 */


use yii\helpers\Html;

?>
<div class="site-viplogin">
    <h1><?= Html::encode($this->title)?></h1>

    <style>
        body{

            padding: 0;
            margin: 0;
            background-image: url(http://www.planwallpaper.com/static/images/wallpaper-hd-nature-17.jpg);title=source: imgur.com;
            -webkit-background-size: 100% 100%;
            -o-background-size: 100% 100%;

        }

    </style>

    <form method = "POST" action = "jobs.php">

        <section style="text-align:justify;">
            <table border="2" cellpadding="5" style="margin:1% 5%; background-color: #ffdd5c; font-family: 'Helvetica Neue'; font-size: 24px; border-radius: 15px; width 100px; box-shadow: 2px 5px 5px black;">
                <tr>
                    <td>
                <tr align = "center">
                    <td colspan ="3">
                        <a input type ='submit' style="font-size: 44px; font-family: 'Impact';" href="http://127.0.0.1/index.php?r=register%2Findex">► KJS Registration ◄</a></style></td></br>
                    </td>
                </tr>
                <tr>
                    <td align="left"><strong>∙ Name:</strong> </td>
                    <td>
                        <input type="text" placeholder="Enter your name" name="user_name" required = "required"/>
                    </td>
                </tr>

                <tr>
                    <td align="left"><strong>∙ Password:</strong></td>
                    <td>
                        <input type="password" name="user_pass" placeholder="Enter your password" required = "required "/>
                    </td>
                </tr>
                <tr>
                    <td align="left"><strong>∙ Email:</strong></td>
                    <td>
                        <input type="text" name="user_email" placeholder="Enter your email"required = "required "/>
                    </td>
                </tr>

                <tr>
                    <td align="left"><strong>∙ Address:</strong></td>
                    <td>
                        <input type="text" name="user_address" placeholder="123street, apmt#" required = "required "/>
                    </td>
                <tr>
                    <td align="left"><strong>∙ State:</strong></td>
                    <td>
                        <select name="user_country" required = "required ">
                            <option> "Select a State"</option>
                            <option> "TX"</option>
                            <option> "AR"</option>
                            <option> "LA"</option>
                            <option> "OK"</option>
                            <option> "MO"</option>
                            <option> "MS"</option>
                            <option> "CO"</option>
                            <option> "KS"</option>
                            <option> "AL"</option>
                            <option> "NA"</option>
                        </select>
                    </td>
                </tr>

                <<tr>
                    <td align="left"><strong>∙ City:</strong></td>
                    <td>
                        <input type="text" name="city" placeholder="City/Town" required = "required "/>
                    </td>
                </tr>
                <tr>
                    <td align="left"><strong>∙ Zipcode:</strong></td>
                    <td>
                        <input type="text" name="zipcode" placeholder="#####" required = "required "/>
                    </td>
                </tr>

                <tr>
                    <td align="left"><strong>∙Phone:</strong></td>
                    <td>
                        <input type="text" name="user_no" placeholder="Enter your Phone # "required = "required "/>
                    </td>
                </tr>

                <tr>
                    <td align="left"><strong>∙ Gender</strong></td>
                    <td>
                        Male:<input type="radio" value="Male" name="user_gender">
                        Female:<input type="radio" value="Female" name="user_gender">
                    </td>
                </tr>

                <tr>
                    <td align="left"><strong>∙ D.O.B. :</strong></td>
                    <td>
                        <input type="date" name="b_day" placeholder="mm-dd-yyyy" required = "required "/>
                    </td>
                </tr>

                <tr>

                    <td align="left" ><strong>☼ Resume:</strong>
                    </td align="left">
                        <input type="file" name="user_resume"/>

                </tr>

                <script>alert("Create a profile and Start Searching Our Jobs!\n\n(Optionally) You May Personalize your Profile and Upload a Resume and a Cover Photo!\n\n We will do our best to find the best Job, for your unique Skill-Set!")</script>

                <tr>

                <td align="left"/><b>☼ Image:</b>
                <td align="left"/>
                    <input type="file";name= user_image">




                    <tr align = "center">
                    <td colspan ="3">

                    <br><button id="close-image"><img src="http://i.imgur.com/MGlSO1G.jpg?1" title="source: imgur.com">"<style><display: inline-block;</style>
                    </button>

                    <td>
                    </tr>

                    </table>

                    </div>
                    <style>
                    button {
                    display: inline-block;
                    height: 134px;
                    padding: 0;
                    margin: 0;
                    vertical-align: center;
                    width: 204px;
                }

                #close-image img {
                    display: inline;
                    height: 130px;
                    width: 200px;
                }

                </style>


                </div>
