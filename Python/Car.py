
class Car:
    id = int

    def __init__(self, license, driver, passegenger):
        self.license = license
        self.driver = driver
        self.passegenger = passegenger
    
    def summary(self):
        return f'License: {self.license}. Driver: {self.driver}'
