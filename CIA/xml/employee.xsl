<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match="/"> 
<html> 
    <head>
        <title> NaiCafe Employee </title>

        <style>
            body {
                background-image: url("chefimg.jpg");
                background-attachment: fixed; /* Center the image */
                
            }

            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding:10px;
            }
            th{
                background-color:#FFFFFF99;
            }
            tr{
                background-color:#FFFFFF55;
            }


        </style>
    </head>

    <body style="font-family:Arial; font-size:12pt;">
        <div style="width:60%; margin:auto; margin-top:60px; padding:40px; background-color:#FFFFFFDD; text-align:center; border-radius:5px;">
            <h1 align="center" >Complete Menu</h1> 
            <b> <a href="../menu.html"> Click here </a> to go back </b> <br/> <br/>

            <xsl:for-each select="employee">
                    <div style="background-color:#a8a58aAA; padding:15px; border-radius:5px;">
                        <div style="background-color:#0c8528 ;color:white;padding:4px; margin-top:1em; margin-bottom:1em; font-size:18px;">
                            <b> Special Chefs <br/> </b>
                        </div>
                        
                        <xsl:for-each select="chefs/specials">
                            <div style="margin-bottom:1em;font-size:10pt; background-color:#98957aCC; border-bottom-right-radius:10px; border-bottom-left-radius:10px; padding:20px;">

                                    <table style="width:100%">
                                        <tr>
                                            <th> Name </th>
                                            <th> Age </th>
                                            <th> Role </th>
                                            <th> Salary </th>
                                            <th> Experience </th>
                                            <th> Gender </th>
                                            <th> Contact </th>
                                        </tr>

                                        <xsl:for-each select="person">
                                            <tr>
                                                <xsl:for-each select="./*">
                                                    <td> <xsl:value-of select="."/> </td>
                                                </xsl:for-each>
                                            </tr>
                                        </xsl:for-each>



                                    </table>

                                    <b> <xsl:value-of select="name"/> </b> <br/>
                                    

                            </div>
                        </xsl:for-each>
                        

                    </div>

                    <div style="background-color:#a8a58aAA; padding:15px; border-radius:5px;">
                        <div style="background-color:#0c8528 ;color:white;padding:4px; margin-top:1em; margin-bottom:1em; font-size:18px;">
                        <b> Normal Chefs <br/> </b>
                        </div>

                        <xsl:for-each select="chefs/common">
                            <div style="margin-bottom:1em;font-size:10pt; background-color:#98957aCC; border-bottom-right-radius:10px; border-bottom-left-radius:10px; padding:20px;">
                                    <table style="width:100%">
                                        <tr>
                                            <th> Name </th>
                                            <th> Age </th>
                                            <th> Salary </th>
                                            <th> Experience </th>
                                            <th> Gender </th>
                                        </tr>

                                        <xsl:for-each select="person">
                                            <tr>
                                                <xsl:for-each select="./*">
                                                    <td> <xsl:value-of select="."/> </td>
                                                </xsl:for-each>
                                            </tr>
                                        </xsl:for-each>



                                    </table>

                                    <b> <xsl:value-of select="name"/> </b> <br/>
                                    
                            </div>
                        </xsl:for-each>
                    </div>

                    <div style="background-color:#a8a58aAA; padding:15px; border-radius:5px;">
                        <div style="background-color:#0c8528 ;color:white;padding:4px; margin-top:1em; margin-bottom:1em; font-size:18px;">
                        <b> Waiters <br/> </b>
                        </div>

                        <xsl:for-each select="others/waiters">
                            <div style="margin-bottom:1em;font-size:10pt; background-color:#98957aCC; border-bottom-right-radius:10px; border-bottom-left-radius:10px; padding:20px;">
                                    <table style="width:100%">
                                        <tr>
                                            <th> Name </th>
                                            <th> Age </th>
                                            <th> Salary </th>
                                            <th> Experience </th>
                                            <th> Gender </th>
                                        </tr>

                                        <xsl:for-each select="person">
                                            <tr>
                                                <xsl:for-each select="./*">
                                                    <td> <xsl:value-of select="."/> </td>
                                                </xsl:for-each>
                                            </tr>
                                        </xsl:for-each>



                                    </table>

                                    <b> <xsl:value-of select="name"/> </b> <br/>
                                    
                            </div>
                        </xsl:for-each>
                    </div>

                    <div style="background-color:#a8a58aAA; padding:15px; border-radius:5px;">
                        <div style="background-color:#0c8528 ;color:white;padding:4px; margin-top:1em; margin-bottom:1em; font-size:18px;">
                        <b> Cleaners <br/> </b>
                        </div>

                        <xsl:for-each select="others/cleaners">
                            <div style="margin-bottom:1em;font-size:10pt; background-color:#98957aCC; border-bottom-right-radius:10px; border-bottom-left-radius:10px; padding:20px;">
                                    <table style="width:100%">
                                        <tr>
                                            <th> Name </th>
                                            <th> Age </th>
                                            <th> Salary </th>
                                            <th> Experience </th>
                                            <th> Gender </th>
                                        </tr>

                                        <xsl:for-each select="person">
                                            <tr>
                                                <xsl:for-each select="./*">
                                                    <td> <xsl:value-of select="."/> </td>
                                                </xsl:for-each>
                                            </tr>
                                        </xsl:for-each>



                                    </table>

                                    <b> <xsl:value-of select="name"/> </b> <br/>
                                    
                            </div>
                        </xsl:for-each>
                    </div>

                    <div style="background-color:#a8a58aAA; padding:15px; border-radius:5px;">
                        <div style="background-color:#0c8528 ;color:white;padding:4px; margin-top:1em; margin-bottom:1em; font-size:18px;">
                        <b> Managers <br/> </b>
                        </div>

                        <xsl:for-each select="managers">
                            <div style="margin-bottom:1em;font-size:10pt; background-color:#98957aCC; border-bottom-right-radius:10px; border-bottom-left-radius:10px; padding:20px;">
                                    <table style="width:100%">
                                        <tr>
                                            <th> Name </th>
                                            <th> Age </th>
                                            <th> Role </th>
                                            <th> Salary </th>
                                            <th> Experience </th>
                                            <th> Gender </th>
                                            <th> Contact </th>
                                        </tr>

                                        <xsl:for-each select="person">
                                            <tr>
                                                <xsl:for-each select="./*">
                                                    <td> <xsl:value-of select="."/> </td>
                                                </xsl:for-each>
                                            </tr>
                                        </xsl:for-each>

                                    </table>

                                    <b> <xsl:value-of select="name"/> </b> <br/>
                                    
                            </div>
                        </xsl:for-each>
                    </div>

            </xsl:for-each>
        
        </div>
        
    </body>

</html>
</xsl:template>
</xsl:stylesheet>