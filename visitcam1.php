<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Visit Cambodia</title>
</head>

<body>
    <center>
        <table style="width:1280px">
            <tr>
                <td colspan="2">
                    <?php 
                       include('Query/header.php');
                    ?>
                </td>
            </tr>
            <tr>
                <td style="width:920px; vertical-align: top">
                    <hr>
                    <h2>Places to Visit</h2>
                    Page is under Contruction
                    <hr>
                    <h2>Package Tours</h2>
                    Page is under Contruction
                    <hr>
                    <h2>Hotels</h2>
                    Page is under Contruction
                    <hr>
                    <h2>Transportation</h2>
                    Page is under Contruction
                    <hr>
                </td>
                <td style="width:350px; vertical-align: top">
                    <?php
                        include ('Query/q_side.php');
                    ?>
                </td>
            </tr>
        </table>
    </center>

    <center>
        <table style="width:1280px">
            <tr>
                <td colspan="2">
                    <!-- IMAGE -->
                </td>
            </tr>
            <tr>
                <td style="width:920px; vertical-align: top">
                    <form name="frmAddNew" action="#" method="post" enctype="multipart/form-data">
                        <table style="width:920px; font-size:20pt">
                            <tr>
                                <td colspan="2" style="padding: 5px">
                                    <h2> Add New Information </h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:220px; padding: 5px">Product Id :</td>
                                <td style="width:700px; padding: 5px">
                                    <input type="text" name="txtId" style="width:650px;  font-size:20pt">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Product Name :</td>
                                <td style="padding: 5px"><input type="text" name="txtProName" style="width:650px;  font-size:20pt"></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Product Type :</td>
                                <td style="padding: 5px">
                                    <?php
                                    // ----------------------------------------------------------------
                                    ?>

                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Description :</td>
                                <td style="padding: 5px"><textarea rows="8" style="width:650px;  font-size:20pt">
                            </textarea></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Destination Link :</td>
                                <td style="padding: 5px"><input type="text" name="txtDesLink" style="width:650px;  font-size:20pt"></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Choose Image :</td>
                                <td style="padding: 5px"><input type="file" name="fImg" style="font-size:20pt"></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px"></td>
                                <td style="padding: 5px">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="Submit" name="cmdSubmint" value="Submit">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="Reset" name="cmdReset" value="Cancel">
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
                <td style="width:350px">
                    <!-- IMAGE -->
                </td>
            </tr>
            <tr>
                <td>CopyRight@2023, NUM IT30_11</td>
                <td style="text-align: center">
                    <a href="aboutus.html">About Us</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="contactus.html">Contact</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>