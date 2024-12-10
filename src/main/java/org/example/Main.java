package org.example;
<<<<<<< HEAD
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        // Scanner for user input
        Scanner scanner=new Scanner(System.in);

        // Prompt user for the purchase price
        System.out.print("Enter the purchase price: ");
        double price =scanner.nextDouble();

        // Tax rates
        double stateTaxRate = 0.04;
        double countyTaxRate = 0.02;

        // Calculations
        double stateTax = price * stateTaxRate;
        double countyTax = price * countyTaxRate;
        double totalSalesTax = stateTax + countyTax;
        double totalSaleAmount = price + totalSalesTax;

        // Outputs
        System.out.println("\n--- Sales Tax Calculation ---");
        System.out.printf("%-25s: $%.2f%n", "Purchase Price", price);
        System.out.printf("%-25s: $%.2f%n", "State Tax (4%)", stateTax);
        System.out.printf("%-25s: $%.2f%n", "County Tax (2%)", countyTax);
        System.out.printf("%-25s: $%.2f%n", "Total Sales Tax", totalSalesTax);
        System.out.printf("%-25s: $%.2f%n", "Total Sale Amount", totalSaleAmount);
=======

import java.util.Scanner;
import java.text.DecimalFormat;

public class Main {

    public static void main(String[] args) {
        // Setup variables
        Scanner scanner = new Scanner(System.in);
        final double STATE_TAX_RATE = 0.06;
        final double COUNTY_TAX_RATE = 0.02;

        // Call methods
        double purchasePrice = inputPurchasePrice(scanner);
        double stateTax = calculateTax(purchasePrice, STATE_TAX_RATE);
        double countyTax = calculateTax(purchasePrice, COUNTY_TAX_RATE);
        double totalTax = calculateTotal(stateTax, countyTax);
        double totalPrice = calculateTotal(purchasePrice, totalTax);

        // Display totals
        displayTotals(purchasePrice, stateTax, countyTax, totalTax, totalPrice);

        scanner.close();
    }

    /**
     * Takes the user input for price, converts it to a double, and returns the value.
     */
    public static double inputPurchasePrice(Scanner scanner) {
        System.out.print("Enter the purchase price: ");
        return Double.parseDouble(scanner.nextLine());
    }

    /**
     * Accepts a double price and a double tax rate, calculates the tax, and returns the value.
     */
    public static double calculateTax(double price, double taxRate) {
        return price * taxRate;
    }

    /**
     * Accepts two double values, calculates their sum, and returns it.
     */
    public static double calculateTotal(double value1, double value2) {
        return value1 + value2;
    }

    /**
     * Accepts purchasePrice, stateTax, countyTax, totalTax, and totalPrice, and displays them formatted.
     */
    public static void displayTotals(double purchasePrice, double stateTax, double countyTax, double totalTax, double totalPrice) {
        DecimalFormat df = new DecimalFormat("#,##0.00");

        System.out.println("\n--- Totals ---");
        System.out.printf("Purchase Price: $%s%n", df.format(purchasePrice));
        System.out.printf("State Tax:      $%s%n", df.format(stateTax));
        System.out.printf("County Tax:     $%s%n", df.format(countyTax));
        System.out.printf("Total Tax:      $%s%n", df.format(totalTax));
        System.out.printf("Total Price:    $%s%n", df.format(totalPrice));
>>>>>>> 56ecb646351bebc28f76559f8e9cdf5318c1246a
    }
}
