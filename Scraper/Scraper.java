import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;

/**
 * 
 * @author Damien Borowski
 *
 */

public class Scraper {
	public static void main(String[] args) {
		
		final String url = "http://www.ucd.ie/registry/admissions/ER_Alevel.html";
		Document document;
		try {
			document = Jsoup.connect(url).get();
			
			for(Element row : document.select("tbody.searchable tr")) {

				//Check if there is an empty row or not
				if(row.select("tr.searchable:nth-of-type(0)").text().equals(" ")) {
					continue;
				}else {

					/*
					 * This is the main DATA gathering pieve of code
					 * We can store all variables that we have accessed from the scraped website
					 */
					
					final String CourseCode = row.select("td:nth-of-type(1)").text();
					System.out.println(CourseCode);
					final String CourseName = row.select("td:nth-of-type(2)").text();
					System.out.println(CourseName);
					final String ALevels = row.select("td:nth-of-type(3)").text();
					System.out.println(ALevels);
				}
			}			
		}catch(Exception ex){
			System.out.println("Error connecting to website! ~14");
		}
	}
}
