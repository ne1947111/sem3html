<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
    <xsl:template match="/"> 
        <html> 
            <head>
                <title> Complete Menu | NaiCafe </title>
                <!--BOOTSTRAP LIBRARIES-->
                <style>
                    body {
                        background-image: url("bgimg.png");
                        background-attachment: fixed; /* Center the image */
                        
                    }

                </style>
               
            </head>

            <body  style="font-family:Arial;font-size:12pt;"> 

                <div style="width:60%; margin:auto; margin-top:60px; padding:40px; background-color:#FFFFFFDD; text-align:center; border-radius:5px;">
                    <h1 align="center" >Complete Menu</h1> 
                    <b> <a href="../menu.html"> Click here </a> to go back </b> <br/> <br/>
                    <b> <a href="./employee.xml"> Click here </a> to view the employee details </b> <br/> <br/>
                    <xsl:for-each select="menu">
                            
                            <xsl:for-each select="category">
                                <div style="background-color:#a8a58aAA; padding:15px; border-radius:5px;">

                                    <div style="background-color:#0c8528 ;color:white;padding:4px; margin-top:1em; margin-bottom:1em; font-size:18px;">

                                    <b> <xsl:value-of select="type"/> <br/> </b>

                                    </div>
                                    <xsl:for-each select="fooditem">
                                        <div style="background-color:#61300b ;color:white;padding:4px">

                                        <span style="font-weight:bold"><xsl:value-of select="FoodName"/> - </span>
                                        Rs. <xsl:value-of select="PriceForHalf"/> / <xsl:value-of select="PriceForFull"/>
                                        <span style="float:right"> <xsl:value-of select="AvgRating"/>  ⭐ </span>
                                        </div>

                                        <div style="margin-bottom:1em;font-size:10pt; background-color:#98957aCC; border-bottom-right-radius:10px; border-bottom-left-radius:10px; padding:20px;">
                                        <xsl:if test="Image">
                                            <img style="width:200px; border-radius:10px;">
                                                <xsl:attribute name="src">
                                                    ../images/menuitems/<xsl:value-of select="Image"/>
                                                </xsl:attribute>
                                            </img>
                                        </xsl:if>                                      
                                        

                                            <p>
                                            <xsl:value-of select="Description"/>
                                            </p>
                                            <span> This <b> <xsl:value-of select="Cuisine"/>  </b> dish is Served for <b> <xsl:value-of select="TimeOfServe"/> </b> </span> <br/>

                                        </div>

                                    </xsl:for-each> 
                                </div>
                                    <hr/>   
                            </xsl:for-each>
                    </xsl:for-each>
                </div>
            </body> 
        </html> 
    </xsl:template> 
</xsl:stylesheet> 
