package Testes;




import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;


public class ClienteCadastro {

	private static final String KEY = "webdriver.gecko.driver";
	private static final String VALUE = "C:\\Users\\181710062\\Desktop\\Automatizados\\eclipse\\geckodriver.exe";
	
	FirefoxDriver pagina;
	
	@Before
	public void antes() {
		System.setProperty(KEY, VALUE);
		
		pagina = new FirefoxDriver();
		pagina.get("http://localhost/Projeto_UC14/index.php");
	}
	
	@Test
	public void test() {
		WebElement nome = pagina.findElementByXPath("/html/body/div/div/center/form/b/b/form/input[1]");
		WebElement email = pagina.findElementByXPath("/html/body/div/div/center/form/b/b/form/input[2]");
		WebElement senha = pagina.findElementByXPath("/html/body/div/div/center/form/b/b/form/input[3]");
		
		
		nome.sendKeys("novoUsuario");
		email.sendKeys("novoUsuario@gmail.com");
		senha.sendKeys("1234");
		
		
		
		WebElement cadastrar = pagina.findElementByXPath("/html/body/div/div/center/form/b/b/form/button");
		cadastrar.click();
		

		
		
		
	//	/html/body/div[2]/table
	}

}

























