from Car import Car

if __name__ == '__main__':
    car = Car('bxk129', 'Fabián', '3')
    #No necesito crear un método especial para acceder a las variables en python.
    print(vars(car))
    print(car.summary())