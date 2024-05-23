# Author: Syed Mirsab Rizvi
# Class: CPS*3320
# Date: May 23, 2024
# Description: This script calculates the area of a circle based on user input.

import sys
import math

def calculate_area(radius):
    return math.pi * radius ** 2

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Error: Radius is required.")
        sys.exit(1)
    
    try:
        radius = float(sys.argv[1])
    except ValueError:
        print("Error: Please enter a valid number for the radius.")
        sys.exit(1)
    
    area = calculate_area(radius)
    print(f"The area of the circle is {area:.2f}.")
