OOP 2026
```java
public class Homework1 {
    public static void main(String[] args) {

        int i, j;

        for(i=0; i<10; i++) {
            for(j=0; j<=i; j++) {
                System.out.print("*");
            }
            System.out.println();
        }

        System.out.println();

        for(i=0; i<10; i++) {
            for(j=i; j<10; j++) {
                System.out.print("*");
            }
            System.out.println();
        }

        System.out.println();

        for(i=0; i<10; i++) {
            for(j=0; j<9-i; j++) {
                System.out.print(" ");
            }
            for(; j<10; j++) {
                System.out.print("*");
            }
            System.out.println();
        }

        System.out.println();

        for(i=0; i<10; i++) {
            for(j=0; j<i; j++) {
                System.out.print(" ");
            }
            for(; j<10; j++) {
                System.out.print("*");
            }
            System.out.println();
        }
    }
}
```
![Alt homework11](./images/Homework1_1)
```java
public class Homework2 {
    public static void main(String[] args) {

        int a = 1, b = 1, c;

        for(int i = 1; i <= 20; i++) {
            System.out.print(a + " ");

            c = a + b;
            a = b;
            b = c;
        }
    }
}
```
![Alt homework12](./images/Homework1_2)
```java
public class Homework3 {
    public static void main(String[] args) {

        int a = 1, b = 1, c;
        double ratio;

        for(int i = 3; i <= 20; i++) {
            c = a + b;
            ratio = (double)c / b;

            System.out.println(c + "/" + b + "=" + ratio);

            a = b;
            b = c;
        }
    }
}
```
![Alt homework13](./images/Homework1_3)
```java
public class Homework4 {
    public static void main(String[] args) {

        int i, j;

        for(i = 1; i <= 9; i++) {
            for(j = 1; j <= 9; j++) {
                System.out.print(j + "*" + i + "=" + (j * i) + "\t");
            }
            System.out.println();
        }
    }
}
```
![Alt homework14](./images/Homework1_4)
```java
public class Homework5 {

    public static void main(String[] args) {

        int i;
        double a = 4.0;
        double pi = 0;

        for(i=1; i<=10000; i=i+2) {

            if(i % 4 == 1) {
                pi = pi + a/i;
            }
            else {
                pi = pi - a/i;
            }
        }

        System.out.println(pi);
    }
}
```
![Alt homework5](./images/Homework5)
```java
public class Homework5_2 {

    public static void main(String[] args) {

        int i;
        double pi = 0;

        for(i=0; i<100; i++) {

            pi = pi + Math.pow(-1.0/3.0, i) / (2*i+1);

        }

        pi = Math.sqrt(12) * pi;

        System.out.println(pi);
    }
}
```
![Alt homework5_2](./images/Homework5_2)
```java
public class Homework6 {

    public static void main(String[] args) {

        int[][] binomial = new int[7][7];

        for(int i = 0; i < 7; i++) {

            for(int j = 0; j <= i; j++) {

                if(j == 0 || j == i) {
                    binomial[i][j] = 1;
                }
                else {
                    binomial[i][j] =
                            binomial[i-1][j-1] + binomial[i-1][j];
                }

                System.out.print(binomial[i][j] + " ");
            }

            System.out.println();
        }
    }
}
```
![Alt homework6](./images/Homework6)
```java

public class Homework7 {

	public static void main(String[] args) {
		int data[] = new int[20];
		for(int i=0; i<20; i++)
		    data[i]=(int)(Math.random()*100);
		for(int i=0; i<20; i++)
		    System.out.print(data[i]+" ");
		
		System.out.println();
		
		for(int i=0; i<19; i++) {

            int min = i;

            for(int j=i+1; j<20; j++) {
                if(data[j] < data[min]) {
                    min = j;
                }
            }

            int temp = data[i];
            data[i] = data[min];
            data[min] = temp;
        }


        System.out.println("정렬 후");

        for(int i=0; i<20; i++) {
        
        	System.out.print(data[i] + " ");
        }
	}
        
}
```
![Alt homework7](./images/Homework7)
