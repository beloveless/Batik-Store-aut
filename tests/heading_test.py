import unittest, os
from selenium import webdriver
from selenium.webdriver.common.by import By

class BatikWebsiteTestCase(unittest.TestCase):
    @classmethod
    def setUpClass(cls):
        # Inisialisasi pengaturan untuk browser Firefox
        option = webdriver.FirefoxOptions()
        option.add_argument('--headless')  # Menjalankan browser tanpa antarmuka grafis
        cls.browser = webdriver.Firefox(options=option)

        try:
            cls.url = os.environ['URL']  # Mengambil URL dari variabel lingkungan
        except:
            cls.url = "http://localhost"

    def test(self):
        # Menjalankan serangkaian pengujian
        self.test_1_page_heading_check()
        self.test_2_product_check()
        self.test_3_contact_check()
    
    def test_1_page_heading_check(self):  
        access_url = self.url + '/index.php'
        self.browser.get(access_url)
        heading_element2 = self.browser.find_element(By.TAG_NAME, 'h1') 
        print("Heading text:", heading_element2.text)
        # Menghilangkan atau mengganti karakter '\n' dengan karakter baris baru
        self.assertIn('WELCOME TO\nSTORE BATIK TULIS', heading_element2.text)  

    def test_2_product_check(self):  
        self.browser.find_element(By.XPATH, '//*[@id="navbarNav"]/ul/li[2]/a').click() 
        heading_element = self.browser.find_element(By.TAG_NAME, 'h2') 
        self.assertIn('~ ETALASE PRODUCT ~', heading_element.text)  

    def test_3_contact_check(self):  
        self.browser.find_element(By.XPATH, '//*[@id="navbarNav"]/ul/li[3]/a').click() 
        heading_element3 = self.browser.find_element(By.TAG_NAME, 'h3') 
        self.assertIn('HUBUNGI KAMI :', heading_element3.text)  
    
    @classmethod
    def tearDownClass(cls):
        cls.browser.quit()

if __name__ == '__main__':
    unittest.main(verbosity=2, warnings='ignore')
