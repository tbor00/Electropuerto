<?php
//---------------------------------------------------------------------------
echo "<SCRIPT LANGUAGE=\"Javascript1.2\">\n";
echo "AddCampo(\"productop[1]\", 1, \"" . convert_str("el campo Producto.",$default->encode)."\", \"text\",'');\n";
echo "</SCRIPT>\n";
?>
<FORM ACTION="<?php echo $PHP_SELF ?>" METHOD="POST" NAME="form_productosp" ONSUBMIT="return ChequeaForm(this);">
<TABLE CELLPADDING="1" CELLSPACING="1" BORDER="0">
<TR> 
<TD><STRONG STYLE="color:<?php echo $default->fieldrequired_color ?>">Producto:</STRONG></TD> 
<TD><INPUT NAME='productop[1]' CLASS="boxes" VALUE="<?php echo $formdata[1]->fields['productop']; ?>" TYPE='TEXT' SIZE='50' MAXLENGTH='50'></TD> 
</TR>
</TABLE> 
<BR>
<TABLE CELLPADDING="1" CELLSPACING="1" BORDER="0" WIDTH="100">
<TR>
<TD><INPUT CLASS="button" NAME="submit" VALUE="Aceptar" TYPE="submit"></TD>
<TD><INPUT CLASS="button" NAME="cancel" VALUE="Cancelar" TYPE="button" ONCLICK="<?php echo "document.location='$PHP_SELF?$config[cancel_option]'"; ?>"></TD>
</TR>
</TABLE>
<?php
form_hidden_fields($config, $formdata[1]->fields['id_productop']);
?>
<SCRIPT>First_Field_Focus();</SCRIPT>
</FORM>
