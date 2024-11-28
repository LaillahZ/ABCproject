package org.example;

public class Main {
    public static void main(String[] args) {
        // Scanner for user input
        Scanner scanner = new Scanner(System.in);

        // Prompt user for the purchase price
        System.out.print("Enter the purchase price: ");
        double price = scanner.nextDouble();

        // Tax rates
        double stateTaxRate = 0.04; // 4%
        double countyTaxRate = 0.02; // 2%

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
    }
}
