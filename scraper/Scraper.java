import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLConnection;
import java.net.UnknownHostException;
import org.jsoup.*;

import com.sun.xml.internal.txw2.Document;

public class Scraper {
	
	public Scraper(String url) throws UnknownHostException{
		scrapeMyJam(url);
	}
	
	public static void scrapeMyJam(String url){
		String html = getUrl(url);
		org.jsoup.nodes.Document doc = Jsoup.parse(html);
		String mytext = doc.getAllElements().toString();
		System.out.println(mytext);
	}
	
	public static String getUrl(String url){
        URL urlObj = null;
        try{
            urlObj = new URL(url);
        }
        catch(MalformedURLException e){
            System.out.println("The url was malformed!");
            return "";
        }
        URLConnection urlCon = null;
        BufferedReader in = null;
        String outputText = "";
        try{
            urlCon = urlObj.openConnection();
            in = new BufferedReader(new
                    InputStreamReader(urlCon.getInputStream()));
            String line = "";
            while((line = in.readLine()) != null){
                outputText += line;
            }
            in.close();
        }catch(IOException e){
            System.out.println("There was an error connecting to the URL");
            return "";
        }
        return outputText;
    }
	
}
