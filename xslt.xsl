<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Catalog</h2>
    <div style="float:left; min-width:100%;">
      <div style="float:left; width:30%">Title</div>
      <div style="float:left; width:30%">Artist</div>
      <div style="float:left; width:30%">Price</div>
    </div>
    <xsl:for-each select="catalog/cd">
    <div style="float:left; width:100%; clear:both">
      <div style="float:left; width:30%"><xsl:value-of select="title"/></div>
      <div style="float:left; width:30%"><xsl:value-of select="artist"/></div>
      <div style="float:left; width:30%"><xsl:value-of select="price"/></div>
    </div>
    </xsl:for-each>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>