using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using Field;

namespace ReportsSampleApplication
{
    public partial class Form1 : Form
    {
        private string paramTemplate = "{{" +
"    \"template\": {{\"paper\": \"A4\"}}," +
"    \"context\": {{" +
"        \"hello\": {{" +
"            \"new\": \"Tx\"," +
"            \"value\": \"{0}\"," +
"            \"rect\": [100, 700, 400, 750]" +
"        }}" +
"    }}" +
"}}";

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            var reports = new Reports();
            var param = String.Format(paramTemplate, textBox1.Text);
            reports.Render(param, textBox2.Text);
        }
    }
}
