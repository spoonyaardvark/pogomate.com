<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-move">
        <xsl:apply-templates select="move" mode="page-move"/>
    </xsl:template>

    <xsl:template match="move" mode="page-move">
        <h1>
            <xsl:value-of select="@name"/>
        </h1>
        <div class="move-info">
            <div class="move-type">
                <xsl:call-template name="snippet-type">
                    <xsl:with-param name="size" select="16"/>
                    <xsl:with-param name="type" select="@type"/>
                </xsl:call-template>
                <xsl:choose>
                    <xsl:when test="@class='fast'">
                        <xsl:text>Fast move</xsl:text>
                    </xsl:when>
                    <xsl:when test="@class='charge'">
                        <xsl:text>Charge move</xsl:text>
                    </xsl:when>
                </xsl:choose>
            </div>
            <xsl:if test="@power&gt;0 or @energy&gt;0">
                <h6>Stats</h6>
                <div class="stats">
                    <xsl:text>Power: </xsl:text>
                    <xsl:value-of select="@power"/>
                    <br/>
                    <xsl:text>Energy: </xsl:text>
                    <xsl:value-of select="@energy"/>
                </div>
            </xsl:if>
            <xsl:if test="@pvpPower&gt;0 or @pvpEnergy&gt;0">
                <h6>PVP Stats</h6>
                <div class="stats-pvp">
                    <xsl:text>Power: </xsl:text>
                    <xsl:value-of select="@pvpPower"/>
                    <br/>
                    <xsl:text>Energy: </xsl:text>
                    <xsl:value-of select="@pvpEnergy"/>
                </div>
            </xsl:if>
            <xsl:if test="pokemon">
                <h6>Available to</h6>
                <div class="move-users">
                    <xsl:apply-templates select="pokemon" mode="page-move"/>
                </div>
            </xsl:if>
            <xsl:if test="not(pokemon)">
                <xsl:text>This move is not available in the game now.</xsl:text>
            </xsl:if>
        </div>
    </xsl:template>

    <xsl:template match="pokemon" mode="page-move">
        <a href="/pokemon/{@link}">
            <xsl:value-of select="@name"/>
        </a>
    </xsl:template>
</xsl:stylesheet>