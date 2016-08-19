/*Imports quantity and value by country(Top 5)*/
CREATE OR REPLACE VIEW vw_country_quantity_value AS
    SELECT 
        COUNTRY_OF_SUPPLY AS country, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE COUNTRY_OF_SUPPLY IS NOT NULL
    GROUP by country
    ORDER BY quantity DESC
	LIMIT 5;
	
/*Quantity and value by Importer(Top 5)*/
CREATE OR REPLACE VIEW vw_importer_quantity_value AS
    SELECT 
        REVISED_IMPORTER_LIST AS importer, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE REVISED_IMPORTER_LIST IS NOT NULL
    GROUP by importer
	ORDER BY quantity DESC
	LIMIT 5;
	
/*Quantity and value by Brand(Top 5)*/
CREATE OR REPLACE VIEW vw_brand_quantity_value AS
    SELECT 
        BRAND_NAME AS brand, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE BRAND_NAME IS NOT NULL
    GROUP by brand
	ORDER BY quantity DESC
	LIMIT 5;

/*Quantity and value by Manufacturer(Top 5)*/
CREATE OR REPLACE VIEW vw_manufacturer_quantity_value AS
    SELECT 
        REVISED_MANUFACTURER AS manufacturer, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE REVISED_MANUFACTURER IS NOT NULL
    GROUP by manufacturer
	ORDER BY quantity DESC
	LIMIT 5;
	
/*Quantity and value by usp_category(Top 5)*/
CREATE OR REPLACE VIEW vw_usp_quantity_value AS
    SELECT 
        USP_CATEGORY AS usp, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE USP_CATEGORY IS NOT NULL
    GROUP by usp
	ORDER BY quantity DESC
	LIMIT 5;