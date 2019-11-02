import java.sql.*;
import java.util.Calendar;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;


public class scraper
{
	
  public static void main(String[] args) throws ClassNotFoundException
  {
	  String CourseCode="";
	  String CourseName="";
	  String ALevels="";

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
					 * This is the main DATA gathering piece of code
					 * We can store all variables that we have accessed from the scraped website
					 */
					
					CourseCode = row.select("td:nth-of-type(1)").text();
					//System.out.println(CourseCode);
					CourseName = row.select("td:nth-of-type(2)").text();
					//System.out.println(CourseName);
					ALevels = row.select("td:nth-of-type(3)").text();
					//System.out.println(ALevels);
					if(!(CourseCode.isBlank()||CourseName.isBlank()||ALevels.isBlank())) {
					 try
					    {
					      // create a mysql database connection
					      String myDriver = "com.mysql.cj.jdbc.Driver";
					      String myUrl = "jdbc:mysql://localhost/codeforgoodteam9";
					      Class.forName(myDriver);
					      Connection conn = DriverManager.getConnection(myUrl, "root", "1234");
					      // create a sql date object so we can use it in our INSERT statement

					      // the mysql insert statement
					      String query = " insert into courses (course_id, name, entry_requirements, university_id)"
					        + " values (?, ?, ?, ?)";
					      
					      // create the mysql insert preparedstatement
					      PreparedStatement preparedStmt = conn.prepareStatement(query);
					      preparedStmt.setString (1,CourseCode );
					      preparedStmt.setString (2, CourseName);
					      preparedStmt.setString (3, ALevels);
					      preparedStmt.setInt (4, 1);

					      // execute the preparedstatement
					      preparedStmt.execute();
					      
					      conn.close();
					    }
					    catch (SQLException e)
					    {
					      System.err.println("Got an exception!");
					      System.err.println(e.getMessage());
					      System.out.println("SQLException: " + e.getMessage());
					      System.out.println("SQLState: " + e.getSQLState());
					      System.out.println("VendorError: " + e.getErrorCode());
					      
					    }
					}
				}
			}			
		}catch(Exception ex){
			System.out.println("Error connecting to website! ~14");
		}
   
  }
}