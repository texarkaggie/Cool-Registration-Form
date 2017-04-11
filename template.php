<?php
/**
 * Created by PhpStorm.
 * User: JD Vickers
 * Date: 4/10/2017
 * Time: 8:50 PM
 */

<style>
body{

    padding: 100;
    margin: 0;
    background: #89db3b;
}

    </style>

    <form method = "POST" action = "jobs.php">

        <section style="text-align:justify;">
            <table border="10" cellpadding="15" style="margin:2% 1%; background-color: #ffdd5c; font-family: 'Palatino Linotype'; font-size: 30px; border-radius: 15px; width 1000px; box-shadow: 12px 50px 15px black;">
                <tr>
                <td>
                <tr align = "center">
                    <td colspan ="3">
                        <a class="btn btn-lg btn-success" style="background-color: black;  font-size: 44px; font-family: 'Impact';" href="http://127.0.0.1/index.php?r=register%2Findex">► KJS Registration ◄</a></style></td></br>
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

                    <td align="left" ><strong>∙Resume*:</strong></td>
                    <td align ="left">
                        <input type="file" name="user_resume"/>
                    </td>
                </tr>
                <script>alert("Create a profile and Start Searching Our Jobs!\n\n(Optionally) You May Personalize your Profile and Upload a Resume and a Cover Photo!\n\n We will do our best to find the best Job, for your unique Skill-Set!")</script>

                <tr>
                    <td align="left"><strong> Image: </strong>
                    <td align ="left">
                        <input type="file" name="user_image"/>

                    </td>
                </tr>

                <tr align = "center">
                    <td colspan ="30">

                    <button id="close-image"><img src="https://preview.ibb.co/hrr585/lightning_horse.jpg"></button>
                    <button id="close-CSS"></button>

                    </td>
                </tr>

            </table>

</div>
                  <style>
button {
    display: inline-block;
    height: 134px;
                    padding: 0;
                    margin: 0;
                    vertical-align: top;
                    width: 204px;
                }

                #close-image img {
                    display: block;
                    height: 130px;
                    width: 200px;
                }

                #close-CSS {
                    background-image: url( 'https://preview.ibb.co/fvhbgQ/lighting_horse.jpg' );
                    background-size: 200px 130px;
                    height: 134px;
                    width: 204px;
                }
            </style>


</div>