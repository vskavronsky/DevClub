def fibonacci(n):
    result = []
    a, b = 0, 1
    while a < n:
        result.append(a)
        a, b = b, a+b
    return result
    
    
if __name__ == '__main__':
    f100 = fibonacci(100)
    print(f100)
    