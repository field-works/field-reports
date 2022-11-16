using System;
using System.IO;
using FieldWorks.FieldReports;

static class Example
{
    static void Main(string[] args)
    {
        var param = new {
            template = new {
                paper = "A4"
            },
            context = new {
                hello = new {
                    @new = "Tx",
                    value = "Hello, World!",
                    rect = new int[] {100, 700, 400, 750}
                }
            }
        };
        var reports = Bridge.CreateProxy();
        var pdf = reports.Render(param);
        using (var fs = new FileStream(args[0], FileMode.Create))
        using (var bw = new BinaryWriter(fs))
        {
            bw.Write(pdf);
        }
    }
}
