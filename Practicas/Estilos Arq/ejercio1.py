# Description: Ejercicio 1
def convinatoria(n, p):
    if p == 0 or p == n:
        return 1
    else:
        return convinatoria(n - 1, p - 1) + convinatoria(n - 1, p)

if __name__ == "__main__":
    n = int(input("Ingrese N: "))
    p = int(input("Ingrese P: "))
    print("posibles combinaciones: ", convinatoria(n, p))