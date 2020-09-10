<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-lists">
        <div id="page-lists">
            <h1>Lists</h1>
            <!--
            <div class="alert alert-primary" role="alert">
                <xsl:text>To use a list, copy and paste it to the pokemon search string.</xsl:text>
            </div>
            -->

            <xsl:for-each select="list[not(@block=preceding-sibling::list/@block)]">
                <xsl:variable name="block" select="@block"/>
                <h2 class="h3">
                    <xsl:value-of select="$block"/>
                </h2>
                <div class="entries">
                    <xsl:for-each select="../list[@block=$block]">
                        <div class="entry">
                            <xsl:call-template name="snippet-icon">
                                <xsl:with-param name="name" select="@type"/>
                                <xsl:with-param name="size" select="72"/>
                            </xsl:call-template>
                            <div class="inner">
                                <h3 class="h6">
                                    <xsl:value-of select="@name"/>
                                </h3>
                                <xsl:call-template name="snippet-string">
                                    <xsl:with-param name="name" select="''"/>
                                    <xsl:with-param name="string" select="@string"/>
                                </xsl:call-template>
                            </div>
                        </div>
                    </xsl:for-each>
                </div>
            </xsl:for-each>
        </div>
    </xsl:template>
</xsl:stylesheet>
