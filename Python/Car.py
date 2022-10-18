from random import random


class Car:
    id = random(1,101)

    def __init__(self, license, driver, passegenger):
        self.license = license
        self.driver = driver
        self.passegenger = passegenger
