<?xml version="1.0" encoding="UTF-8"?>


<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:strip-space elements="*" /> 
    <xsl:template match="/">
        <html>
		
            <head><title>Component in Store</title>
			<style>
			.background-image: url("travel/img/background.jpg");

			#component {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			}
			
			#component td, #component th {
			border: 1px solid #ddd;
			padding: 8px;
			width: 10%;
			}

			#component tr:nth-child(even){background-color: #f2f2f2;}

			#component tr:hover {background-color: #ddd;}

			#component th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color:transparent;
			color: black;
			}
			
			
			</style>
            <link rel="stylesheet" type="text/css" href="component.css"/>
            </head>
            <body>
                <h1 style="text-align:center;">Component Availability</h1>
                <table border="1" id="component">
                    <thead>
                        <tr><th style="text-align:center;">ComponentName</th><th style="text-align:center;">Price</th><th style="text-align:center;">ComponentType</th></tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="Component">
                            <xsl:apply-templates>
                                <xsl:sort select="ComponentName" data-type="text" order="ascending"/>
                            </xsl:apply-templates>
                        </xsl:for-each>
                    </tbody>
                </table>
               
            </body>
        </html>
    </xsl:template>
    <xsl:template match="Component">
        <xsl:variable name="cssClass">
            <xsl:choose>
                <xsl:when test="position() mod 2 = 0">coloured</xsl:when>
                <xsl:otherwise>normal</xsl:otherwise>
            </xsl:choose>
        </xsl:variable>
        <tr class="{$cssClass}">
            <xsl:apply-templates select="ComponentName"/>
            <xsl:apply-templates select="Price"/>
			<xsl:apply-templates select="ComponentType"/>
        </tr>
    </xsl:template>
    <xsl:template match="ComponentName|Price|ComponentType">
        <td><xsl:value-of select="text()"/></td>
    </xsl:template>
</xsl:stylesheet>