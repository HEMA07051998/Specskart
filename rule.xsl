<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match="/"> 
<html> 
<body> 
<h1 align="center">sunglass.</h1> 
<table border="3" align="center" > 
<tr> 
	<th>id</th> 
	<th>image</th> 
	<th>price</th> 
</tr> 
	<xsl:for-each select="sunglass/s"> 
<tr> 
	<td><xsl:value-of select="id"/></td> 
	<td><xsl:value-of select="image"/></td> 
	<td><xsl:value-of select="price"/></td>
</tr> 
	</xsl:for-each> 
	</table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet>