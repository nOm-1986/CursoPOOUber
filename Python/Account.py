from random import random


class Account:

    id = random(1,101)

    def __init__(self, name, document, email, password):
        self.name = name
        self.document = document
        self.email = email
        self.password = password

    
