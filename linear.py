import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

#Reading data

data=pd.read_csv('dataset.csv')
print(data.shape)

#importing data 

head=0
tail=0
x=data.iloc[:,0].values
y=data.iloc[:,1].values

try:
    mean_x=np.mean(x)
    mean_y=np.mean(y)
    n=len(x)
    
    for i in range(n):
# sum of (x-_x)
        head += (x[i] - mean_x)*(y[i] - mean_y)
        tail += (x[i] - mean_x)**2
        
# slope formula
    print('head -->> ',head)
    print('tail -->> ',tail)
    
    m=head/tail

    c=(mean_y) - (m * mean_x)
        
    print(" m is ",m," \n c is ",c)

except e:
        print(e)
        print(" your errors ") 
head1=0
tail1=0

for i in range(n):
    yp=c+m*x[i]
    print(' predicted values -->>  ',yp)
    head1 += (yp - mean_y)**2
    tail1 += (y[i] - mean_y)**2
print('head -->> ',head1)
print('tail -->> ',tail1)
r=head1/tail1
r1=1-r

print(r1)
plt.plot(r,r1)
plt.show()