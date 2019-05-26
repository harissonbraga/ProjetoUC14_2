package Testes;

import javax.swing.JOptionPane;

import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;


public class ProdutoCadastro {

	private static final String KEY = "webdriver.gecko.driver";
	private static final String VALUE = "C:\\Users\\181710062\\Desktop\\Automatizados\\eclipse\\geckodriver.exe";
	
	FirefoxDriver pagina;
	
	@Before
	public void antes() {
		System.setProperty(KEY, VALUE);
		
		pagina = new FirefoxDriver();
		pagina.get("http://localhost/Projeto_UC14/telasCadastro/cad_produto.php");
	}
	
	@Test
	public void test() {
		WebElement nome = pagina.findElementByName("nome");
		WebElement cor = pagina.findElementByName("cor");
		WebElement codigo = pagina.findElementByName("codigo");
		WebElement data_de_vencimento = pagina.findElementByName("data_de_vencimento");
		
	
		
		nome.sendKeys("Dentadura2");
		cor.sendKeys("branca");
		codigo.sendKeys("123");
		data_de_vencimento.sendKeys("30/10/2100");
		
		
		
		
		
		WebElement cadastrar = pagina.findElementByXPath("/html/body/div/div/center/div/form/input[5]");
		cadastrar.click();
		
		
		
		if( pagina.toString().contains("b")) {
			JOptionPane.showMessageDialog(null, "Teste realizado com sucesso!");
			
		}else {
			JOptionPane.showMessageDialog(null, "Teste Falhou");
		}
		
	//	/html/body/div[2]/table
	}

}

























