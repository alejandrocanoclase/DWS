import math

def test_factorial(z):
    try:
        print("factorial_while_loop({0}) = {1}".format(z,factorial_while_loop(z)))
        print("math.factorial({0}) = {1}".format(z,math.factorial(z)))
    except (ValueError, NameError) as e:
        print(e)

def factorial_while_loop(x):
    if(x==0):
        return 1
    elif (x>0):
        result = 1
        while x > 0:
            result = result * x
            x = x -1
        return result
    else:
        raise ValueError('El valor de x ha de ser >=0.')

#print(factorial_while_loop(7))

for i in range(0,5):
    test_factorial(i)