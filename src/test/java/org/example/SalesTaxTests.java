package org.example;

import org.junit.jupiter.api.Test;

import java.io.ByteArrayInputStream;

import static org.junit.jupiter.api.Assertions.assertEquals;

public class SalesTaxTests {

    private static final double COUNTY_TAX_RATE = 0.02;
    private static final double STATE_TAX_RATE = 0.04;
    /*Tests user input*/
    @Test
    public void whenUserInputIsDouble_thenCorrectNumberIsReturnedAsDouble() {
        //setup to have scanner read from this input stream
        ByteArrayInputStream in = new ByteArrayInputStream("21.34".getBytes());
        System.setIn(in);

        assertEquals(21.34, Main.inputPurchasePrice());
    }

    /*Tests state tax*/
    @Test
    public void whenPriceIsWholeNumber_thenStateTaxIsCorrect() {
        assertEquals(4, Main.calculateTax(100, STATE_TAX_RATE));
    }

    @Test
    public void whenPriceIsDouble_thenStateTaxIsCorrect() {
        assertEquals(5.1000000000000005, Main.calculateTax(127.50, STATE_TAX_RATE));
    }

    @Test
    public void whenPriceIsLessThanADollar_thenStateTaxIsCorrect() {
        assertEquals(0.012, Main.calculateTax(0.30, STATE_TAX_RATE));
    }

    /*Tests county tax*/
    @Test
    public void whenPriceIsWholeNumber_thenCountyTaxIsCorrect() {
        assertEquals(2, Main.calculateTax(100, COUNTY_TAX_RATE));
    }

    @Test
    public void whenPriceIsDouble_thenCountyTaxIsCorrect() {
        assertEquals(2.5500000000000003, Main.calculateTax(127.50, COUNTY_TAX_RATE));
    }

    @Test
    public void whenPriceIsLessThanADollar_thenCountyTaxIsCorrect() {
        assertEquals(0.006, Main.calculateTax(0.30, COUNTY_TAX_RATE));
    }

    /*Tests total method*/
    @Test
    public void whenWholeNumbers_thenTotalIsCorrect() {
        assertEquals(100, Main.calculateTotal(50, 50));
    }

    @Test
    public void whenDecimalValueNumbers_thenTotalIsCorrect() {
        assertEquals(22.50, Main.calculateTotal(11.25, 11.25));
    }
}
