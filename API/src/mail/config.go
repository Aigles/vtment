package mail

import (
	"log"
    "bytes"
    "html/template"
)

var user_mail="13orcollectionaigle@gmail.com";
var user_Name="13 or collection";
var password_mail= "Aigle@123";

func Messagehtml(body string) string  {

var msg string

templateData := struct {
	Name string
	URL  string
}{
	Name: body,
	URL:  "http://geektrust.in",
}
msg,err:=ParseTemplate("template.html", templateData)
log.Printf("template error: %s", err)

	return msg;
	
}

func  ParseTemplate(templateFileName string, data interface{}) (string,error) {
	var body string
    t, err := template.ParseFiles(templateFileName)
    if err != nil {
        return body,err
    }
    buf := new(bytes.Buffer)
    if err = t.Execute(buf, data); err != nil {
        return body,err
    }
    body = buf.String()
    return body,err
}