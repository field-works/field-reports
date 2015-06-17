Imports Field

Public Class Form1

    Private paramTemplate = "{{" & _
"    ""template"": {{""paper"": ""A4""}}," & _
"    ""context"": {{" & _
"        ""hello"": {{" & _
"            ""new"": ""Tx""," & _
"            ""value"": ""{0}""," & _
"            ""rect"": [100, 700, 400, 750]" & _
"        }}" & _
"    }}" & _
"}}"

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim reports As New Reports
        Dim param As String = String.Format(paramTemplate, TextBox1.Text)
        reports.Render(param, TextBox2.Text)
    End Sub

End Class
