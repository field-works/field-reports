using System;
using Newtonsoft.Json;
using Field;

namespace ConsoleApplication
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var reports = new Reports();
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
            reports.Render(JsonConvert.SerializeObject(param), "hello.pdf");
        }
    }
}
