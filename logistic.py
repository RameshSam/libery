# importing libery
import pandas as pd
import matplotlib.pyplot as plt
import numpy as np

data=pd.read_csv('dataset1.csv')
x=data.iloc[:,[3,4]].values
y=data.iloc[:,5].values

# spilting datasets

from sklearn.model_selection import train_test_split

xtrain,xtest,y_train,ytest=train_test_split(x,y,test_size=0.25,random_state=0)

# Feature scaling

from sklearn.preprocessing import StandardScaler

st_x = StandardScaler()
xtrain=st_x.fit_transform(xtrain)
xtest=st_x.transform(xtest)

# fitting logistic Regression

from sklearn.linear_model import LogisticRegression

classifier = LogisticRegression(random_state=0)
classifier.fit(xtrain,y_train)

# predicting test result

y_pred=classifier.predict(xtest)

# creating confusion matrix

# from sklearn.metrics import confusion_matrix

# cm=confusion_matrix(y,y_pred)

#vishualizing train result

from matplotlib.colors import ListedColormap

xset,yset=xtrain,y_train
x1,x2=np.meshgrid(np.arange(start=xset[:,0].min()-1,stop=xset[:,0].max()+1,step=0.01),np.arange(start=xset[:,1].min()-1,stop=xset[:,1].max()+1,step=0.01))
plt.contourf(x1,x2,classifier.predict(np.array([x1.ravel(),x2.ravel()]).T).reshape(x1.shape),alpha=0.75,cmp=ListedColormap(('purple','green')))
plt.xlim(x1.min(),x1.max())
plt.ylim(x2.min(),x2.max())

for i,j in enumerate(np.unique(yset)):
    plt.scatter(xset[yset==j,0],xset[yset==j,1],c=ListedColormap(('blue','red'))(i),label=j)
plt.title(" Logistic Regression ( Training set)")
plt.xlabel(" Age ")
plt.ylabel(" Estimated Salary")
plt.legend()
plt.show()

#visualizing test result

from matplotlib.colors import ListedColormap

xset,yset=xtest,ytest
x1,x2=np.meshgrid(np.arange(start=xset[:,0].min()-1,stop=xset[:,0].max()+1,step=0.01),np.arange(start=xset[:,1].min()-1,stop=xset[:,1].max()+1,step=0.01))
plt.contourf(x1,x2,classifier.predict(np.array([x1.ravel(),x2.ravel()]).T).reshape(x1.shape),alpha=0.75,cmp=ListedColormap(('purple','green')))
plt.xlim(x1.min(),x1.max())
plt.ylim(x2.min(),x2.max())

for i,j in enumerate(np.unique(yset)):
    plt.scatter(xset[yset==j,0],xset[yset==j,1],c=ListedColormap(('blue','red'))(i),label=j)
plt.title(" Logistic Regression ( Tesing set)")
plt.xlabel(" Age ")
plt.ylabel(" Estimated Salary")
plt.legend()
plt.show()
