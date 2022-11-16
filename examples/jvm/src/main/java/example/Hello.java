package example;

import java.io.FileOutputStream;
import jp.co.field_works.field_reports.*;

public class Hello 
{
    public static void main(String[] args)
    {
        String param = "{\n" +
"   \"template\": {\"paper\": \"A4\"},\n" +
"   \"context\": {\n" +
"       \"hello\": {\n" +
"           \"new\": \"Tx\",\n" +
"           \"value\": \"Hello, World!\",\n" +
"           \"rect\": [100, 700, 400, 750]\n" +
"       }\n" +
"   }\n" +
"}\n";
        Proxy reports = Bridge.createProxy(null);
        try {
            FileOutputStream fos = new FileOutputStream(args[0]);
            byte[] pdf = reports.render(param);
            fos.write(pdf);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
