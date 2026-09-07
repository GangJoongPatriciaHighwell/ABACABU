```java
public class Homework1_1 {
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
public class Homework1_2 {
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
![Alt homework12](./images/images/Homework1_2)
```java
public class Homework1_3 {
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
![Alt homework13](./images/images/Homework1_3)
```java
public class Homework1_4 {
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
![Alt homework14](./images/images/Homework1_4)
