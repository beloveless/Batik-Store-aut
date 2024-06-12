# Import Libraries 
import unittest 
from selenium import webdriver
from selenium.webdriver.common.by import By

class BatikWebsiteTestCase(unittest.TestCase):
    @classmethod
    def setUpClass(self):
        self.browser = webdriver.Firefox()

    def test_1_page_heading_check(self): 
        self.browser.get('http://localhost/Batik-Store-aut-master/src/index.php') 
        heading_element = self.browser.find_element(By.TAG_NAME, 'h1') 
        self.assertEqual(heading_element.text, 'STORE BATIK TULIS')

# Menutup browser setelah semua pengujian selesai. 
    @classmethod
    def tearDownClass(self): 
        self.browser.quit()

if __name__ == '__main__':
    unittest.main(verbosity=2, warnings='ignore')
