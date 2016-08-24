/*Quantity and value by country and category*/
CREATE OR REPLACE VIEW vw_country_category_quantity_value AS
    SELECT 
        COUNTRY_OF_SUPPLY AS country, USP_CATEGORY AS category, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE COUNTRY_OF_SUPPLY IS NOT NULL
	AND USP_CATEGORY IS NOT NULL
    GROUP by country,category;

/*Quantity and value by importer and category*/
CREATE OR REPLACE VIEW vw_importer_category_quantity_value AS
    SELECT 
        REVISED_IMPORTER_LIST AS importer, USP_CATEGORY AS category, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE REVISED_IMPORTER_LIST IS NOT NULL
	AND USP_CATEGORY IS NOT NULL
    GROUP by importer,category;
	
/*Quantity and value by brand and category*/
CREATE OR REPLACE VIEW vw_brand_category_quantity_value AS
    SELECT 
        BRAND_NAME AS brand, USP_CATEGORY AS category, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE BRAND_NAME IS NOT NULL
	AND USP_CATEGORY IS NOT NULL
    GROUP by brand,category;

/*Quantity and value by manufacturer and category*/
CREATE OR REPLACE VIEW vw_manufacturer_category_quantity_value AS
    SELECT 
        REVISED_MANUFACTURER AS manufacturer, USP_CATEGORY AS category, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE REVISED_MANUFACTURER IS NOT NULL
	AND REVISED_MANUFACTURER NOT REGEXP '^-?[0-9]+$'
	AND USP_CATEGORY IS NOT NULL
    GROUP by manufacturer,category;

/*Quantity and value by dosage and category*/
CREATE OR REPLACE VIEW vw_dosage_category_quantity_value AS
    SELECT 
        DOSAGE_FORM AS dosage, USP_CATEGORY AS category, SUM(QUANTITY) AS quantity, SUM(TOTAL_VALUE_USD) AS usd_value
    FROM
        tbl_sample
	WHERE DOSAGE_FORM IS NOT NULL
	AND USP_CATEGORY IS NOT NULL
    GROUP by dosage,category;   

/*All usp category*/
CREATE OR REPLACE VIEW vw_usp_category AS
    SELECT 
        USP_CATEGORY AS category
    FROM
        tbl_sample
    WHERE USP_CATEGORY IS NOT NULL
    GROUP by category;