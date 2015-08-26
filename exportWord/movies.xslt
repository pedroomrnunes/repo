<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xsl:stylesheet
  version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 
  <xsl:output method="xml" indent="yes"/>
  <xsl:template match="/">
 
    <xsl:processing-instruction name="mso-application">
      <xsl:text>progid="Word.Document"</xsl:text>
    </xsl:processing-instruction>
<w:document xmlns:ve="http://schemas.openxmlformats.org/markup-compatibility/2006" 
            xmlns:o="urn:schemas-microsoft-com:office:office" 
            xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" 
            xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" 
            xmlns:v="urn:schemas-microsoft-com:vml" 
            xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" 
            xmlns:w10="urn:schemas-microsoft-com:office3:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml">
        <w:body>
        <w:p w:rsidR="00FB71E8" w:rsidRPr="00760815" w:rsidRDefault="00760815" w:rsidP="006A6033">
            <w:pPr>
                <w:jc w:val="center"/>
                <w:rPr>
                    <w:rFonts w:ascii="Verdana" w:hAnsi="Verdana"/>
                    <w:b/>
                    <w:color w:val="548DD4" w:themeColor="text2" w:themeTint="99"/>
                    <w:sz w:val="30"/>
                    <w:szCs w:val="30"/>
                </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00760815">
                <w:rPr>
                    <w:rFonts w:ascii="Verdana" w:hAnsi="Verdana"/>
                    <w:b/>
                    <w:color w:val="548DD4" w:themeColor="text2" w:themeTint="99"/>
                    <w:sz w:val="30"/>
                    <w:szCs w:val="30"/>
                </w:rPr>
                <w:t>Movies</w:t>
            </w:r>
        </w:p>
   <!-- for-each loop added for Genre.  This loop includes the Open XML elements for the paragraph the Genre placeholder is in as well as all paragraphs for the Movies. -->
        <xsl:for-each select="Movies/Genre">
        <w:p w:rsidR="00760815" w:rsidRDefault="00760815">
            <w:pPr>
                <w:rPr>
                    <w:b/>
                    <w:color w:val="548DD4" w:themeColor="text2" w:themeTint="99"/>
                </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00760815">
                <w:rPr>
                    <w:b/>
                    <w:color w:val="548DD4" w:themeColor="text2" w:themeTint="99"/>
                </w:rPr>
                
                <w:t> 
    <!-- Genre Name placeholder replaced by the Genre's Name attribute in the XML data file. -->
                   <xsl:value-of select="@name"/>
                </w:t>
            </w:r>
        </w:p>
         <!-- for-each loop added for Movie.  This loop includes the Open XML elements that define the   paragraph as a bulleted list. -->
        <xsl:for-each select="Movie">
        <w:p w:rsidR="00760815" w:rsidRPr="006A6033" w:rsidRDefault="006A6033" w:rsidP="006A6033">
            <w:pPr>
                <w:pStyle w:val="ListParagraph"/>
                <w:numPr>
                    <w:ilvl w:val="0"/>
                    <w:numId w:val="2"/>
                </w:numPr>
                <w:rPr>
                    <w:b/>
                </w:rPr>
            </w:pPr>
            <w:r>
                <w:rPr>
                    <w:b/>
                </w:rPr>
                 <!-- Movie Title placeholder replaced by the Movie's Name element in the XML data file. -->
                <w:t xml:space="preserve"><xsl:value-of select="Name"/> </w:t>
            </w:r>
        </w:p>
        </xsl:for-each>
        </xsl:for-each>
        <w:p w:rsidR="00760815" w:rsidRDefault="00760815"/>
        <w:sectPr w:rsidR="00760815" w:rsidSect="00FB71E8">
            <w:pgSz w:w="11906" w:h="16838"/>
            <w:pgMar w:top="1417" w:right="1701" w:bottom="1417" w:left="1701" w:header="708" w:footer="708" w:gutter="0"/>
            <w:cols w:space="708"/>
            <w:docGrid w:linePitch="360"/>
        </w:sectPr>
    </w:body>
    
</w:document>
 </xsl:template>
</xsl:stylesheet>
