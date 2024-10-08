/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IClinic } from "../../interfaces/interfaces";

type IBody = Omit<IClinic, 'id'>;

export const createClinic = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/clinics`,
    body: JSON.stringify(formData),
  });
  return result;
};

